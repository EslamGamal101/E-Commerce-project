@extends('admin.master')

@section('category-active','active')
@section('content')
<div class="page-header">
  <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="page-title">
               Edit Category 
                
            </h2>    
               
            
        </div>
    </div>
</div>
<div class="card-body">
    <div class="row">
        
      <div class="col-md-6">
        <form method="post" action="{{ route('admin.categories.update',['category'=>$category]) }}"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="form-group mb-3">
            <label for="example-name">Name</label>
            <input type="string" id="example-email" name="name" class="form-control" value="{{ $category->name }}">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />    
        </div>
        <div class="form-group mb-3">
          <label for="example-email">price</label>
          <input type="string" id="price" name="price" class="form-control" value="{{ $category->price }}" >
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>
        <div class="form-group mb-3">
          <label for="example-password">Image</label>
          <input type="file" class="form-control" name="image" >
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
        
        
      </div> <!-- /.col -->
    </div>

    <div class="page-title mb-3">
        <button type="submit" class="btn btn-primary">Submet</button>
    </div>  

  </form>
</div>
     
@endsection