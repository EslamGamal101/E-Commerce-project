@extends('admin.master')

@section('testmonial-active','active')
@section('content')
<div class="page-header">
  <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="page-title">
               Edit testmonial 
                
            </h2>    
               
            
        </div>
    </div>
</div>
<div class="card-body">
    <div class="row">
        
      <div class="col-md-6">
        <form method="post" action="{{ route('admin.testmonials.update',['testmonial'=>$testmonial]) }}"  >
          @csrf
          @method('PUT')
        <div class="form-group mb-3">
            <label for="example-name">Name</label>
            <input type="string" id="example-email" name="name" class="form-control" value="{{ $testmonial->name }}">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />    
        </div>
        <div class="form-group mb-3">
          <label for="example-email">Description</label>
          <textarea type="text"  name="description" class="form-control" aria-valuetext="{{ $testmonial->name }}" > </textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
        
        
        
      </div> <!-- /.col -->
    </div>

    <div class="page-title mb-3">
        <button type="submit" class="btn btn-primary">Submet</button>
    </div>  

  </form>
</div>
     
@endsection