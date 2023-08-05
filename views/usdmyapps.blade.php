@extends('master')
<br><br><br><br><br>
@section('content')
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

          <div class="row gy-4">

            <div class="col-lg-12">
              <div class="portfolio-details-slider swiper">
                  
                  <div class="card text-center">
  
  <div class="card-body">
    <h3 class="card-title"><font color="red">This Complete 5 in 1 Value packed Course <br>Is Going Out For Just $10.00.</font></h3>
    <p class="card-text">


<br>
<img src="{{ asset('assets/img/apps.jpg') }}" width="300px"/>
<br><br>
<b>In the App Creation Module, you will learn how to:</b>
<br>
▪️Create Any application with your smartphone.
<br>
▪️Convert any Website to Mobile Application.
<br>
▪️Monetize Your Apps with Google Admob.
<br>
▪️publish Your Apps on google playstore.
<br>
▪️How to monetize your App Creating skills on fiverr and upwork.


<br><br>

<b>In the Landing Page Creation Module, you’ll learn how to:</b>
<br>
▪️Create a landing page with your mobile phone for free with free domain name.
<br>
▪️Integrate WhatsApp Chatbots on your landing page.
<br>
▪️How to upload Facebook pixel to your landing page.

<br><br>


<b>In the eCommerce Store creation bundle, you’ll learn how to:</b>
<br>
▪️Create your online store for free
<br>
▪️Auto receive orders and payment 
<br>
▪️Auto send out payment receipts to customers 


<br><br>

<b>In The Youtube Channel Creation bundle, you’ll learn how to:</b>

<br>
▪️Pick a lucrative Niche to work on.

<br>
▪️Create a channel on the niche 
<br>
▪️Grow your channel 
<br>
▪️Edit your Youtube videos like a pro with mobile phone.
<br>
▪️Monetize your channel 
<br>
▪️Free YouTube tools for channel growth 


<br><br>

In the Mobile Games Creation Module, you’ll learn how to:
<br>
▪️Create Android games with your mobile phone without writing any single line of code.
<br>
▪️Monetize your games with google Admob.
<br>
▪️Publish your games with playstore 



<br><br>

</p>
   
   <form method="POST" action="{{route('flutterpay', $product->id)}}">
             @csrf
            
        <button type="submit" class="btn btn-primary">Click Here To Pay In USD</button>
           </form>
           
  </div>
</div>
          
                
            </div>



           
             
              
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Details Section -->
@endsection
