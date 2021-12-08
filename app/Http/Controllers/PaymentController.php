<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\User;
use Payjp\Charge;

class PaymentController extends Controller
{
    //
    public function PaymentPage(){
        return view('payment_check');
    }
    public function index()
    {
      
        $user = auth()->user();
        
        $cardList = [];
    // 既にpayjpに登録済みの場合
      if (!empty($user->payjp_customer_id)) {
        // カード一覧を取得
        \Payjp\Payjp::setApiKey(config('payjp.secret_key'));
        // \Payjp\Payjp::setApiKey('sk_test_2dfaea8eabcbd8fec0fedc41');
        $cardDatas = \Payjp\Customer::retrieve($user->payjp_customer_id)->cards->data;
        // dd($cardDatas);  
        foreach ($cardDatas as $cardData) {
          $cardList[] = [
            'id'=> $cardData->id,
            'cardNumber' =>  "**** **** **** {$cardData->last4}",
            'brand' =>  $cardData->brand,
            'exp_year' =>  $cardData->exp_year,
            'exp_month' =>  $cardData->exp_month,
            'name' =>  $cardData->name,
          ];
            }
        }
            return view('payment', ['cardList'=> $cardList]);
    }
    public function payment(Request $request){
      if (empty($request->get('payjp-token')) && !$request->get('payjp_card_id')) {
        abort(404);
      }
    
      DB::beginTransaction();
    
      try {
        // ログインユーザー取得
        $user = auth()->user();
        // シークレットキーを設定
        \Payjp\Payjp::setApiKey(config('payjp.secret_key'));
    
        // ⭐️ 以前使用したカードを使う場合
        if (!empty($request->get('payjp_card_id'))) {
          $customer = \Payjp\Customer::retrieve($user['payjp_customer_id']);
          // 使用するカードを設定
          $customer->default_card = $request->get('payjp_card_id');
          $customer->save();
        // ⭐️ 既にpayjpに登録済みの場合
        } elseif (!empty($user['payjp_customer_id'])) {
          // カード情報を追加
          $customer = \Payjp\Customer::retrieve($user['payjp_customer_id']);
          $card = $customer->cards->create([
            'card' => $request->get('payjp-token'),
          ]);
           // 使用するカードを設定
           $customer->default_card = $card->id;
           $customer->save();
        // ⭐️ payjp未登録の場合
        } else {
           // payjpで顧客新規登録 & カード登録
           $customer = \Payjp\Customer::create([
              'card' => $request->get('payjp-token'),
           ]);
           // DBにcustomer_idを登録
           $user->payjp_customer_id = $customer->id;
           $user->save();
        }
    
        // ⭐️ 支払い処理
        // 新規支払い情報作成
        \Payjp\Charge::create([
             "customer" => $customer->id,
             "amount" => 1000,
             "currency" => 'jpy',
        ]);
    
         DB::commit();
    
        return redirect('/payment_finish')->with('message', '支払いが完了しました');
    
      } catch (\Exception $e) {
        Log::error($e);
        DB::rollback();
    
        if(strpos($e,'has already been used') !== false) {
          return redirect()->back()->with('error-message', '既に登録されているカード情報です');
        }
    
        return redirect()->back();
    }
    }
    public function finish()
    {
      return view('payment_finish');
    }
}