@extends('admin.master')

@section('order-active','active')
@section('content')

<div class="page-header">
  <div class="container-fluid">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
          <h2 class="page-title">
            {{ $order->product->name  }}
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
                          
                          <th>User Name</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Phone</th>
                          <th>Product Name</th>
                          
                          <th>Status</th>
                          
                          
                      </tr>
                  </thead>
                  <tbody>
                     

                      
                                                     
                            <tr>
                              
                              <td>{{ $order->user->name }}</td>
                              <td>{{ $order->user->email }}</td>
                              <td>{{ $order->address}}  </td>
                              <td>{{ $order->phone }}</td>
                              <td>{{ $order->product->name  }} </td>
                              <td>{{ $order->product->price  }}</td>
                              <td>{{ $order->status  }}</td>
                              <td><img src="{{ asset('storage/categories/' . $order->product->image) }}" width="40px"></td>
                                                                                                                            
                            </tr>
                          
                          
                            
                          
                      
                  </tbody>
              </table>
              
              
          </div>
      </div>
  </div>
</div>
<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection