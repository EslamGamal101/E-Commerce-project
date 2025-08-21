@extends('admin.master')

@section('order-active','active')
@section('content')

<div class="page-header">
  <div class="container-fluid">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
          <h2 class="page-title">
            Orders 
            <h4>
        
            </h4>
          </h2>
          <div class="page-title-right">
            <a href="#" class="btn btn-primary">
              Add New
            </a>
          </div>
      </div>
  </div>
</div>

              <table class="table table-hover w-100">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>User Name</th>
                          
                          <th>Address</th>
                          
                          <th>Product Name</th>
                          
                          <th>Status</th>
                          
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @php
                      $totalPrice = 0;
                      @endphp

                      @if (count($orders) > 0)
                          @foreach ($orders as $order)                            
                            <tr>
                              <td>{{ $orders->firstItem()+$loop->index }}</td>
                              <td>{{ $order->user->name }}</td>
                              
                              <td>{{ $order->address}}  </td>
                              
                              <td>{{ $order->product->name  }} </td>
                              
                              <td>{{ $order->status  }}</td>
                              
                              <td>
                                <a href="{{ route('admin.order.show',['order'=>$order]) }}"  class="btn btn-primary">
                                  <i data-icon="E" class="icon"></i>
                                </a>
                                <a href="{{ route('admin.order.edit-status',['order'=>$order]) }}"  class="btn btn-success">
                                  <i data-icon="P" class="icon"></i>
                                </a>
                                
                                <form method="post" action="{{ route('admin.order.delete',['order'=>$order]) }}"class="d-inline">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">
                                    <i class="icon icon-close"></i>
                                  </button>
                                </form>
                                
                              </td>                                                                                              
                            </tr>
                          @endforeach
                          
                            
                          
                      @endif
                  </tbody>
              </table>
              {{ $orders->render('pagination::bootstrap-4') }}
              
          </div>
      </div>
  </div>
</div>
<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection