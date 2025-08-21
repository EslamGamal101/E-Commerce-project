@extends('admin.master')

@section('category-active','active')
@section('content')
<div class="page-header">
  <div class="container-fluid">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
          <h2 class="page-title">
            Categories
            <h4>
              <x-auth-session-status class="mb-4" :status="session('delete_category_status')" />
              <x-auth-session-status class="mb-4" :status="session('update_category_status')" />
            </h4>
          </h2>
          <div class="page-title-right">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
              Add New
            </a>
          </div>
      </div>
  </div>
</div>

<!-- simple table -->

     
     <table class="table table-hover w-100">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Price</th>
          <th>Image</th>
          <th width="20%">action </th>
          
        </tr>
      </thead>
      <tbody>
        @if (count($categories)>0)
        @foreach ( $categories as $category )
        <tr>
          <td>{{ $categories->firstItem()+$loop->index }} </td>
          <td>{{ $category->name }} </td>
          <td>{{ $category->price }} </td>
          <td>
            <img src="{{ asset("storage/categories/$category->image") }}"  width="30px" >
          </td>
          <td>
            <a href="{{ route('admin.categories.show',['category'=>$category]) }}"  class="btn btn-primary">
              <i data-icon="E" class="icon"></i>
            </a>

            <a href="{{ route('admin.categories.edit',['category'=>$category]) }}"  class="btn btn-success">
              <i data-icon="q" class="icon"></i>
            </a>

            <form 
                action="{{ route('admin.categories.destroy',['category'=>$category]) }}"
                method="post" class="d-inline" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" >
                  <i class="icon icon-close"></i>
                </button>
              
            </form>
            @endforeach
            @endif
          </td>
          
        </tr>
        
      </tbody>
    </table>
       
    
  

       
      
    {{ $categories->render('pagination::bootstrap-4') }}
</div> <!-- simple table -->
@endsection