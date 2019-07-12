@extends('main.app')
@section('content')
<div class="main">
	<div class="container">
		<h1 class="well">Add Items</h1>
		<div class="col-lg-12 well">
			<div class="row">
				{{ Form::open(['route'=>'requestItems.store', 'name' => 'frmuserreqItems']) }}
				@include('requestItems._form')
				{{ Form::submit(__('Submit'), ['class' => 'btn btn-success']) }}				
			</div>
			{{ Form::close() }} 
		</div>
	</div>
</div>
</div>
@endsection