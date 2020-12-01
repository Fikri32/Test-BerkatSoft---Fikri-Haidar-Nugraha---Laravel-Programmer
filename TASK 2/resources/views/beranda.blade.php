@extends('layouts/master')

@section('content')
<div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
  <div class="tile-stats">
    <div class="icon"><i class="fa fa-dropbox"></i></div>
    <div class="count">{{$produk}}</div>
    <h3>Produk</h3>
    {{-- <p>Lorem ipsum psdea itgum rixt.</p> --}}
  </div>
</div>
<div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
  <div class="tile-stats">
    <div class="icon"><i class="fa fa-users"></i></div>
    <div class="count">{{$customer}}</div>
    <h3>Customer</h3>
    {{-- <p>Lorem ipsum psdea itgum rixt.</p> --}}
  </div>
</div>
<div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
  <div class="tile-stats">
    <div class="icon"><i class="fa fa-money"></i></div>
    <div class="count">{{$order}}</div>
    <h3>Order</h3>
    {{-- <p>Lorem ipsum psdea itgum rixt.</p> --}}
  </div>
</div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>SELAMAT DATANG {{Auth()->user()->name}}</h2>
        <ul class="nav navbar-right panel_toolbox">
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <h3>TASK 2 CRUD WITH LARAVEL</h3>
      </div>
    </div>
  </div>
</div>
@endsection