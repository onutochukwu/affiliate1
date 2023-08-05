<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Affiliateview;
use App\Models\Orderdetail;
use App\Models\Product;
use App\Models\Refferal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AllControllers extends Controller
{
    public function affiliates()
    {
      return view('affiliates');
    }
    


    public function support()
    {
      return view('support');
    }



    public function sellers()
    {
      return view('sellers');
    }
    
      public function reports()
    {
      return view('reports');
    }
    
      public function report1()
    {
      return view('report1');
    }
    
      public function courses()
    {
      return view('courses');
    }

    public function products()
    {
      return view('products');
    }
    
    
    public function sales()
    {
       
        $orders = Order::where('refferalcode',auth()->user()->affiliate_code)->simplePaginate(10);
       
      return view('sales', compact('orders'));
    }


    public function orders()
    {
        $orders = DB::table('orders')->join('orderdetails','orders.id', '=','orderdetails.order_id')
        ->where('orders.user_id',auth()->user()->id)->select('orders.*','orderdetails.*')->get();

        $data['orders'] = $orders;

      return view('orders', $data);
    }

    public function dashboard()
    {
        $total_profits=0;

        //$data= Refferal::where('user_id',auth()->user()->id)->get();

        $data = Refferal::where('user_id',auth()->user()->id)->sum('refferal_profit');

        $data1 = Refferal::where('user_id',auth()->user()->id)->count();

        //dd($data);

        /* foreach($data as $profit)
        {

            $total_profits += $profit->refferal_profit;

            echo $profit->refferal_profit . '<br>';

        } */

        //die;

        $view['total_profit']= $data;
        $view['number_sales']= $data1;
        $visitors = Affiliateview::where('affiliate_code_user', auth()->id())->count();

        return view('dashboard1', $view, compact('visitors'));


    }

    public function orderdetails()
    {
        $data=Order::all()->where('user_id',auth()->user()->id);
        $orders['orders'] = $data;

      return view('orders', $orders);
    }
    public function product1()

    {
        Product::all()->first()->increment('views');
        $data=Product::all()->first();
        $products['product'] = $data;
      return view('product1', $products);
    }
    
      public function myapps()

    {
        Product::all()->first()->increment('views');
        $data=Product::all()->first();
        $products['product'] = $data;
      return view('myapps', $products);
    }
    
    public function usdmyapps()

    {
        Product::all()->first()->increment('views');
        $data=Product::all()->first();
        $products['product'] = $data;
      return view('usdmyapps', $products);
    }
      public function emailmarketing()

    {
        Product::all()->first()->increment('views');
        $data=Product::all()->first();
        $products['product'] = $data;
      return view('emailmarketing', $products);
    }
    
     public function usdemailmarketing()

    {
        Product::all()->first()->increment('views');
        $data=Product::all()->first();
        $products['product'] = $data;
      return view('usdemailmarketing', $products);
    }
    
    public function digipreneur(Request $req)

    {
        $ref = '';
        if (Cookie::has('ref_code'))
        {
            $ip = $req->ip();
            
            $ref = Cookie::get('ref_code');
            
            $view = Affiliateview::where('affiliate_code', $ref)->where('ip', $ip)->first();
            
            if (empty($view))
            {
                $user = User::where('affiliate_code', $ref)->first();
                
                $affiliate_view = new Affiliateview;
                $affiliate_view->affiliate_code = $ref;
                $affiliate_view->ip = $ip;
                $affiliate_view->affiliate_code_user = $user->id;
                $affiliate_view->views ='1';
                $affiliate_view->save();
                
            }
            
            Product::all()->first()->increment('views');
        $data=Product::all()->first();
        $products['product'] = $data;
      return view('digipreneur', $products);
        }
        Product::all()->first()->increment('views');
        $data=Product::all()->first();
        $products['product'] = $data;
      return view('digipreneur', $products);
    }

    public function paynow(Request $request)
    {
      $product = Product::all()->first();

      $amount = 5000;

      $total = str_replace([',', '.'], '', $amount);

      //dd($amount);

      // dd($amount);

      $url = "https://api.paystack.co/transaction/initialize";
      $fields = [
        // Auth::user->whatever function ie email .. is used to grab a specific data from the logged in user
        'email' => auth()->user()->email,
        'amount' => $total .'00',
        'callback_url' => route('redirectpay')
      ];
      $fields_string = http_build_query($fields);
      //open connection
      $ch = curl_init();

      //set the url, number of POST vars, POST data
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer sk_live_1280945fa901f4adf3a5e456f07c036ee933a8bb",
        "Cache-Control: no-cache",
      ));

      //So that curl_exec returns the contents of the cURL; rather than echoing it
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      //execute post
      $result = curl_exec($ch);

      //dd($result);


      $data = json_decode($result, true);

      if ($data['status'] == true) {

        return redirect()->away($data['data']['authorization_url']);
      }
    }

    public function redirectpay(Request $request)
    {
      if (auth()->check()) {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . $request->trxref,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_live_1280945fa901f4adf3a5e456f07c036ee933a8bb",
            "Cache-Control: no-cache",
          ),
        ));

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {

          echo "cURL Error #:" . $err;
        } else {

          $data = json_decode($response, true);

          //dd($data);
          if ($data['status'] == true) {



            $transaction_id = $data['data']['reference'];
            $amount = $data['data']['amount'];


            $length = strlen($amount);

            $amount_whole = substr($amount, 0, $length - 2);

            $amount_decimal = substr($amount, -2);

            //dd($amount_whole, $amount_decimal);

            $userId = auth()->id();

            $orderAmount = $amount_whole . '.' . $amount_decimal;

            $order = new Order();
            
             $ref = '';

            if (Cookie::has('ref_code')) 
            {

              $ref = Cookie::get('ref_code');
              $order->refferalcode = $ref;
              
              
              
            }



            $order->user_id = $userId;
            $order->payment_method = 'Card';
            $order->status =  'Pending';
            $order->currency =  '₦';
            $order->amount = $orderAmount;
            $order->transaction_id = $transaction_id;
            $order->save();

            $product = Product::all()->first();
            
            
            



              $order_detail = new Orderdetail;

              $order_detail->order_id = $order->id;
              $order_detail->productname = $product->productname;
              $order_detail->quantity = 1;
              $order_detail->price = $product->productprice;
              $order_detail->image = $product->image;

              $order_detail->save();


            $ref = '';

            if (Cookie::has('ref_code')) {

              $ref = Cookie::get('ref_code');



              $referrer = User::where('affiliate_code', $ref)->first();

              $rp = 50;

              $profit = $orderAmount * $rp / 100;

              $refferal = new Refferal;
              $refferal->user_id =  $referrer->id;
              $refferal->order_id = $order->id;
              $refferal->refferal_percentage = $rp;
              $refferal->refferal_profit = $profit;
              $refferal->save();
            }
          }

          return redirect()->route('orderdetails');
        }
      }
    }

}
