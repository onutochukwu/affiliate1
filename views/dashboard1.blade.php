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
              <li class="breadcrumb-item active">Dashboard</li>
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
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{$total_profit}}</h3>

                  <p>Net Earnings</p>
                </div>
                <div class="icon">

                </div>

              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$total_profit}}</h3>

                  <p>Balance</p>
                </div>
                <div class="icon">

                </div>
                  </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3 style="color: white">{{$number_sales}}</h3>

                  <p style="color: white">Number of Sales</p>
                </div>
                <div class="icon">

                </div>
                  </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$visitors}}</h3>

                  <p>Number of Visitors</p>
                </div>
                <div class="icon">

                </div>
                  </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <!-- Main row -->
          <div class="row justify-content-center">
            <!-- Left col -->
            <section class="col-lg-10 connectedSortable">
              <div class="container">
                  <h2>My Affiliate Link</h2>
                  <p>   <div col-12>
                      <input type="text" value="https://xincome.live?ref={{auth()->user()->affiliate_code}}" disabled style="width:300px;">
                      </div></p>
              
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>

@endsection
