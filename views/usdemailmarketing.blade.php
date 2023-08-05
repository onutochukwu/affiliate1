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
    <h3 class="card-title"><font color="red">Profitable Email Marketing 6 Figure Sales Funnel Creation.<br></font></h3>
    <p class="card-text"

<br><br>
<img src="assets/img/emailmarketing.jpg" width="300px"/>
<br><br>
<b>
Do you want to learn how to attract a flood of customers that can’t wait to buy your product or services no matter the price you call?

</b>
<br><br>
<b>Do you want to learn how to make strangers online, fall in love with your brand to the extent that they fall over themselves to buy your product?
</b>
<br><br>
If your answer to these questions are a big YES, allow me to introduce you to…

<br><br>

Profitable Email Marketing 6 - Figure Sales Funnel Creation Program.
<br><br>
Master the Art & Science of Turning Total Strangers Into Excited Paying Customers That Buy From Only You Abandoning The Competition.
<br><br>


<b>What you will learn:</b>
<br><br>
You will learn about how to understand your ideal customers' pain points and desires so that you will be able to influence them to buy from you.

<br><br>
You will learn how to create adverts that standout from the noise online attracting the attention of your ideal customer.
<br><br>

You will learn how to position your product or service as a life saver in the eyes of your ideal customers to the point that they will find it a foolish idea to ignore your product.

<br><br>
You will learn how to create sampler/Presell content that attracts customers who are interested in your product and can easily afford to buy from you without excuses. At the same time repel freebie seekers from entering your funnels.

<br><br>
You will learn how to create Optin pages that collect the details of leads who are interested and eager to buy your product.

<br><br>
You will learn how to build an email list of targeted customers that cannot wait to do business with you.
<br><br>

You will learn how to write sales copies that put your bank alert notification on overdrive.
<br><br>

You will learn how to write emails that make your customers fall in love with your brand, building trust and most importantly sales.

<br><br>
You will learn how to create a website where customers can buy from you within the space of 30 mins.
<br><br>

You will learn how to build your brand on social media, getting you more followers all from your highly targeted email list.

<br><br>
You will learn how to automatically follow up with your audience on autopilot without dancing or doing handstands to get their attention.
<br><br>

You will learn how to build sales funnels that can sell any product or service from any part of the world.
<br><br>

By the end of this course, you will be confidently implementing marketing strategies across the major online marketing channels. You will be able to come up with creative, profitable and persuasive sales funnels that make you MONEY! Coke hard cash.
<br><br>


<b>Who Is This Course For?</b>

<br><br>

This course is for Product sellers (digital or physical) who want to land more leads and automatically close more sales and skyrocket revenue.

<br><br>
This course is for service providers who want to land more clients and generate more profit.

<br><br>
This course is for newbie beginners who are looking to explore digital marketing and create a solid business online.
<br><br>

<b>Don't Miss Out!</b>

<br><br>

Every second you wait is costing you valuable leads and sales.
<br><br>
This courses come with a 30 day money-back guarantee - so there's no risk to get started.
<br><br>


Go ahead and hit the "take this course" button to start growing a business online today!

<br><br>



<br><br>

</p>
   
   <form method="POST" action="{{route('flutterpay', $product->id)}}">
             @csrf
            
        <button type="submit" class="btn btn-primary">Click Here To Pay With $10.00</button>
           </form>
           
  </div>
</div>
          
                
            </div>



           
             
              
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Details Section -->
@endsection
