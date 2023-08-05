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

        <!-- /.row -->

        <!-- Main row -->
        <div class="row justify-content-center">
            <!-- Left col -->
            <section class="col-lg-10 connectedSortable">
              <div class="container">
                  <h2>My Sales</h2>

                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>transaction Id</th>
                        <th>Status</th>
                         <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
@foreach($orders as $order)
                      <tr>
                        <td>{{ optional($order->user)->name }}</td>
                        <td>{{$order->transaction_id}}</td>
                        <td>{{$order->status}}</td>
                        <td>₦{{$order->amount}}</td>
                      </tr>

@endforeach



                    </tbody>
                  </table>
                  {{$orders->links()}}
            </section>
            <!-- right col -->
          </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
