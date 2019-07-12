@extends('layouts.app')
@section('page_title', $page['page_title'])
@section('content')
<div class="card-box col-sm-12 col-md-12">
    <div class="card-body">
   
     {{ Form::open(['route'=>'items.store', 'id' => 'frmitems', 'files' => true, 'enctype' => 'multipart/form-data']) }}
     <!--  -->
     @include('Items._form')

     <p class="p-4">
         </button>
          {{ Form::submit(__('Submit'), ['class' => 'btn btn-success pull-right']) }}
         {{ Form::close() }}
     </p>
    </div>

</div>
@endsection
    @section('custom_script')
        @include('Items.script')
        @endsection

