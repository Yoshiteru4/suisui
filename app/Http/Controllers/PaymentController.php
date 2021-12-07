<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Payjp\Charge;

class PaymentController extends Controller
{
    //
    public function PaymentPage(){
        return view('payment_check');
    }
    public function PaymentLastPage(){
        return view('payment_finish');
    }
    public function index()
    {
        $user = auth()->user();
        $cardList = [];
  
  // 既にpayjpに登録済みの場合
  if (!empty($user->payjp_customer_id)) {
    // カード一覧を取得
    \Payjp\Payjp::setApiKey(config('payjp.secret_key'));
    $cardDatas = \Payjp\Customer::retrieve($user->payjp_customer_id)->cards->data;
    foreach ($cardDatas as $cardData) {
      $cardList[] = [
        'cardNumber' =>  "**** **** **** {$cardData->last4}",
        'brand' =>  $cardData->brand,
        'exp_year' =>  $cardData->exp_year,
        'exp_month' =>  $cardData->exp_month,
        'name' =>  $cardData->name,
      ];
    }
}
  return view('payment', compact('cardList'));
    }
    public function payment(Request $request)
    {   
        if (empty($request->get('payjp-token'))) {
            abort(404);
          }
        
          DB::beginTransaction();
        
          try {
            // ログインユーザー取得
            $user = auth()->user();
            // ⭐️ シークレットキーを設定
            \Payjp\Payjp::setApiKey(config('payjp.secret_key'));
            
            // ⭐️ 顧客情報登録
            $customer = \Payjp\Customer::create([
              // カード情報も合わせて登録する
              'card' => $request->get('payjp-token'),
              // 概要
              'description' => "userId: {$user->id}, userName: {$user->name}",
            ]);
            
            // ⭐️ DBにpayjpの顧客idを登録
            $user->payjp_customer_id = $customer->id;
            $user->save();

        
            // ⭐️ 支払い処理
            // 新規支払い情報作成
            \Payjp\Charge::create([
               // 上記で登録した顧客のidを指定
               "customer" => $customer->id,
               // 金額
               "amount" => 100,
               // 通貨
               "currency" => 'jpy',
            ]);
            
            DB::commit();
        
            return redirect(route('payment'))->with('message', '支払いが完了しました');
          
          } catch (\Exception $e) {
            Log::error($e);
            DB::rollback();
            return redirect()->back();
          }
    }
}