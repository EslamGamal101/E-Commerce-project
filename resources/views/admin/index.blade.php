@extends('admin.master')
@section('title','Dashboard')  
@section('home-active','active')
@section('content')
      <div class="page-header">
        <div class="container-fluid">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="page-title">
              Dashboard
            </h2>
          
          </div>
        </div>
      </div>


  <section class="no-padding-top no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-user-1"></i></div><strong>Total Clients</strong>
              </div>
              <div class="number dashtext-1">{{ Auth::user()->where('user_type','user')->get()->count() }}</div>
            </div>
            <div class="progress progress-template">
              <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-contract"></i></div><strong>#Products</strong>
              </div>
              <div class="number dashtext-2">{{ $product_counts }}</div>
            </div>
            <div class="progress progress-template">
              <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Total Orders</strong>
              </div>
              <div class="number dashtext-3">{{ $orders_count }}</div>
            </div>
            <div class="progress progress-template">
              <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Total Dlevered</strong>
              </div>
              <div class="number dashtext-4">{{ $delevered_products  }}</div>
            </div>
            <div class="progress progress-template">
              <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection