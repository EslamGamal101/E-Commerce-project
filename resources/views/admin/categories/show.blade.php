@extends('admin.master')

@section('category-active','active')
@section('content')
<div class="page-header">
  <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="page-title">
              {{$category->name}} product
                
            </h2>    
               
            
        </div>
    </div>
</div>
<div class="card-body">
    <div class="row">
        
      <div class="col-md-6">
        <form   enctype="multipart/form-data">
            
        <div class="form-group mb-3">
            <label for="example-name">Name</label>
            <p type="string"  name="name" class="form-control" >{{ $category->name }}</p>
                
        </div>
        <div class="form-group mb-3">
          <label for="example-email">price</label>
          <p type="string"  name="price" class="form-control"  >{{ $category->price }} </p>
            
        </div>
        <div class="form-group mb-3">
          <label for="example-password">Image</label>
          <p type="string"   class="form-control"  >Pic test </p>
         {{-- <img src="{{ asset("storage/admins/$admin->image")  }}"  width="80px" > --}}
            
        </div>
        
        
      </div> <!-- /.col -->
    </div>
     
</form>
     
</div>
     
@endsection