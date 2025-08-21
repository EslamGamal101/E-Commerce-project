@extends('admin.master')

@section('testmonial-active','active')
@section('content')
<div class="page-header">
  <div class="container-fluid">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
          <h2 class="page-title">
            Testmonials
            <h4>
              <x-auth-session-status class="mb-4" :status="session('delete_testmonial_status')" />
              <x-auth-session-status class="mb-4" :status="session('update_testmonial_status')" />
            </h4>
          </h2>
          <div class="page-title-right">
            <a href="{{ route('admin.testmonials.create') }}" class="btn btn-primary">
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
          <th>Description</th>
          
          <th width="20%">action </th>
          
        </tr>
      </thead>
      <tbody>
        @if (count($testmonials)>0)
        @foreach ( $testmonials as $testmonial )
        <tr>
          <td>{{ 1+($loop->index) }} </td>
          <td>{{ $testmonial->name }} </td>
          <td>{{ $testmonial->description }} </td>
          <td>
            

            <a href="{{ route('admin.testmonials.edit',['testmonial'=>$testmonial]) }}"  class="btn btn-success">
              <i data-icon="q" class="icon"></i>
            </a>

            <form 
                action="{{ route('admin.testmonials.destroy',['testmonial'=>$testmonial]) }}"
                method="post" class="d-inline" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" >
                  <i class="icon icon-close"></i>
                </button>
              
            </form>
            
          </td>
          
        </tr>
        @endforeach
        @endif
      </tbody>
      </tbody>
    </table>
       
    
  

       
      
    
</div> <!-- simple table -->
@endsection