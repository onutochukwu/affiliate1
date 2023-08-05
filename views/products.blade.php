@extends('master1')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->

        <!-- Main row -->
        <div class="row justify-content-center">
          <!-- Left col -->
          <section class="col-lg-10 connectedSortable">
              <div class="card">
                  <div class="card-header">
                  <h3 class="card-title"><font color="red"><b>Copy your Affiliates Codes below and start promoting to your audience</b></font></h3>
                  
                  </div>
          <div class="card-body table-responsive p-0">
              

                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      
                      <th>Product Name</th>
                      <th>Naira Affiliate Code</th>
                       <th>Dollar Affiliate Code</th>
                    </tr>
                  </thead>
                  <tbody>



                    
                     <tr>
                     
                      <td>Income 101- The Princinciples Of Online Marketing</td>
                      <td>https://xincome.live/myapps?ref={{auth()->user()->affiliate_code}}</td>
                      <td>https://xincome.live/usdmyapps?ref={{auth()->user()->affiliate_code}}</td>
                    </tr>
 
    <tr>
                      
                      <td>Income 102- Profitable Email Marketing</td>
                      <td>https://xincome.live/emailmarketing?ref={{auth()->user()->affiliate_code}}</td>
                       <td>https://xincome.live/usdemailmarketing?ref={{auth()->user()->affiliate_code}}</td>
                    </tr>
 
                    
                     





                  </tbody>
                </table>
                </div>
                </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
