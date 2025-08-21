@extends('admin.master')

@section('testmonial-active','active')
@section('content')
<div class="page-header">
  <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="page-title">
               Show testmonial 
                
            </h2>    
               
            
        </div>
    </div>
</div>
<div class="card-body">
    <div class="row">
        
      <div class="col-md-6">
        <form method="post"   >
          @csrf
          
        <div class="form-group mb-3">
            <label for="example-name">Name</label>
            <p type="string" id="example-email" name="name" class="form-control" value="{{ $testmonial->name }}">
              
        </div>
        <div class="form-group mb-3">
          <label for="example-email">Description</label>
          <p type="text"  name="description" class="form-control" aria-valuetext="{{ $testmonial->description }}" > </p>
            
        </div>
        
        
        
      </div> <!-- /.col -->
    </div>

    <div class="page-title mb-3">
        <button type="submit" class="btn btn-primary">Submet</button>
    </div>  

  </form>
</div>
     
@endsection