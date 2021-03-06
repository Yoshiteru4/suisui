<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Order;
// use Payjp\Charge;
use \Payjp\Customer;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        // $users = Auth::user()->name;
        // dd($user);
        // dd($request);
        $cardList = [];
    // 既にpayjpに登録済みの場合
      if (!empty($user->payjp_customer_id)) {
        // カード一覧を取得
        \Payjp\Payjp::setApiKey(config('payjp.secret_key'));
        // \Payjp\Payjp::setApiKey(config('services.payjp.secret_key'));
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
          // dd($cardDatas);
          }
        }
            return view('paymentcheck', ['cardList'=> $cardList,]);
    }
    public function payment(Request $request){
      if (empty($request->get('payjp-token')) && !$request->get('payjp_card_id')) {
        abort(404);
      }
      // dd($request);
    
      DB::beginTransaction();
      try {
        // ログインユーザー取得
        $user = auth()->user();
        
        // シークレットキーを設定
        \Payjp\Payjp::setApiKey(config('payjp.secret_key'));

        // ⭐️ 顧客情報登録
        $customer = \Payjp\Customer::create([
        // カード情報も合わせて登録する
        'card' => $request->get('payjp-token'),
        // 概要
        'description' => "userId: {$user->id}, userName: {$user->name}",
        ]);
        // dd($customer);
        // DBにcustomer_idを登録
        $user->payjp_customer_id = $customer->id;
        // dd($user);
        $user->save();
        // dd($user);
        $totalprice = $request->totalprice;
        // dd($totalprice);
        // ⭐️ 支払い処理
        // 新規支払い情報作成
        \Payjp\Charge::create([
          "customer" => $customer->id,
          "amount" => $totalprice,
          "currency" => 'jpy',
     ]);
    
       

         DB::commit();
    
        return redirect('/payment_finish')->with('message', '支払いが完了しました');
    
      } 
      catch (\Exception $e) {
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
      $users = Auth::user()->name;
      return view('payment_finish',compact('users'));
    }
}