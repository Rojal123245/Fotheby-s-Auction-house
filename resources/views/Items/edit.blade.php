@extends('layouts.app')
@section('page_title', $page['page_title'])
@section('content')
<div class="card-box col-sm-12 col-md-12">
    <div class="card-body">
     {!! Form::model($data, ['method' => 'PUT','route' => ['items.update', $data->id], 'files' => true, 'enctype' => 'multipart/form-data']) !!}
   
     @include('Items._form')

     <p class="p-4">
         </button>
          {{ Form::submit(__('Update'), ['class' => 'btn btn-success pull-right']) }}
         {{ Form::close() }}
     </p>
    </div>

</div>
@endsection