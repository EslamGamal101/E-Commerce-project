@php
  $totalPrice = 0 ; 
@endphp
@extends('front.master')
@section('title','My Cart')
@section('color','innerpage_navbar')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  .table-container {
      width: 100%;
      margin: 0 auto;
  }
  .custom-margin {
      margin-left: 20px; /* Adjust this value to move the table to the right */
  }
</style>


@section('content')
  
<br>
<<div class="container">
  <div class="row">
      <!-- Form Column -->
      <div class="col-md-4">
          <form action="{{ route('front.orderConfirm') }}" method="post">
              @csrf
              <!-- Add form fields here -->
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp" placeholder="Enter name">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" id="exampleInputEmail1"
               aria-describedby="emailHelp" placeholder="Enter address">
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="int" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" placeholder="Enter phone">
            </div>
              
              <button type="submit" class="btn btn-primary">cash on delivery</button>
              <a class="btn btn-success" href="#" >Pay using card</a>
          </form>
      </div>
      <!-- Table Column -->
      <div class="col-md-8">
          <div class="table-container custom-margin">
              <table class="table table-hover w-100">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Image</th>
                          <th width="20%">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @php
                      $totalPrice = 0;
                      @endphp

                      @if (count($carts) > 0)
                          @foreach ($carts as $cart)
                              @php
                                  // Remove the dollar sign and convert to a numeric value
                                  $price = str_replace('$', '', $cart->product->price);
                                  $price = floatval($price);

                                  // Sum the total prices
                                  $totalPrice += $price;
                              @endphp
                              <tr>
                                  <td>{{ $loop->index + 1 }}</td>
                                  <td>{{ $cart->product->name }}</td>
                                  <td>{{ $cart->product->price }}</td>
                                  <td><img src="{{ asset('storage/categories/' . $cart->product->image) }}" width="40px"></td>
                                  <td>
                                      <form action="{{ route('front.productDestroy',['cart'=>$cart]) }}" method="post" class="d-inline">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger">
                                              <i>delete</i>
                                          </button>
                                      </form>
                                  </td>
                              </tr>
                          @endforeach
                      @endif
                  </tbody>
              </table>
              @if (count($carts) > 0)
                <div class="text-left">
                  <h5>Total price is: ${{ $totalPrice }}</h5>
                
                </div>
              @endif
          </div>
      </div>
  </div>
</div>
<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <br><br><br>

  <!-- end contact section -->

@endsection