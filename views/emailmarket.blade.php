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
    <h3 class="card-title"><font color="red">Profitable Email Marketing 6 Figure<br Sales Funnel Creation. MASTERCLASS<br></font></h3>
    <p class="card-text">


<br>
<img src="assets/img/apps.jpg" width="300px"/>
<br><br>
Do you want to learn how to attract a flood of customers that can’t wait to buy your product or services no matter the price you call?



Do you want to learn how to make strangers online, fall in love with your brand to the extent that they fall over themselves to buy your product?



If your answer to these questions are a big YES, allow me to introduce you to…



Profitable Email Marketing 6 - Figure Sales Funnel Creation Program.

Master the Art & Science of Turning Total Strangers Into Excited Paying Customers That Buy From Only You Abandoning The Competition.

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
   
   <form method="POST" action="{{route('paynow', $product->id)}}">
             @csrf
            
        <button type="submit" class="btn btn-primary">Click Here To Pay Now</button>
           </form>
           
  </div>
</div>
          
                
            </div>



           
             
              
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Details Section -->
@endsection
