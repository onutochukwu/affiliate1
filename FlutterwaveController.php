<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Product;
use App\Models\Refferal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use KingFlamez\Rave\Facades\Rave as Flutterwave;

class FlutterwaveController extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */
    public function initialize()
    {
       // dd('gg');

        $email = auth()->user()->email;

        $product = Product::all()->first();

        $amount = 10;
  
        $total = str_replace([',', ], '', $amount);

        try {
            //This generates a payment reference
            $reference = Flutterwave::generateReference();

            // Enter the details of the payment
            $data = [
                'payment_options' => 'card,banktransfer',
                'amount' => $total,
                'email' => $email,
                'tx_ref' => $reference,
                'currency' => "USD",
                'redirect_url' => route('callback'),
                'customer' => [
                    'email' => $email,
                    "phone_number" => request()->phone,
                    "name" => request()->name
                ],

                "customizations" => [
                    "title" => '5 in 1 Value packed Course',
                    "description" => ""
                ]
            ];

            $payment = Flutterwave::initializePayment($data);

            //dd($payment);

            if ($payment['status'] !== 'success') {
                // notify something went wrong
               
                return;
            }

            return redirect($payment['data']['link']);

        } catch (\Exception $e) {

            //dd($e->getMessage());
        }
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback()
    {

        $status = request()->status;

        

        

        //if payment is successful
        if ($status ==  'successful') {

            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);

            //dd($data);

            //$transaction_id = $data['data']['reference'];
            $amount = $data['data']['amount'];

            //dd($amount);
            //$length = strlen($amount);

           // $amount_whole = substr($amount, 0, $length - 2);

            $amount_decimal = substr($amount, -2);

            //dd($amount_whole, $amount_decimal);

            $userId = auth()->id();

            $orderAmount = $amount . '.' . $amount_decimal;

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
            $order->currency =  '$';
            $order->amount = $orderAmount;
            $order->transaction_id = $transactionID ;
            $order->save();

            $product = Product::all()->first();
        


              $order_detail = new Orderdetail();

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

              $refferal = new Refferal();
              $refferal->user_id =  $referrer->id;
              $refferal->order_id = $order->id;
              $refferal->refferal_percentage = $rp;
              $refferal->refferal_profit = $profit;
              $refferal->save();
            }
          
        
            return redirect()->route('orderdetails');

        }
         elseif($status ==  'cancelled') {
            //Put desired action/code after transaction has been cancelled here
        } else {
            //Put desired action/code after transaction has failed here
        }
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (including parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

    }
}
