@extends('main.app')
@section('page_title', $page['page_title'])
@section('content')
<div class="container" style="margin-left: 10%;">
	<h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
		<div class="row">
		{{ Form::open(['route'=>'advanceQuery', 'name' => 'frmuserRegister']) }}
		<div class="col-sm-3 form-group">
				<label>Artist</label>
				{{ Form::text('artist', null, ['class'=>'form-control', 'placeholder'=>'Enter artist Name Here..']) }}
			</div>
			<div class="col-sm-3 form-group">
				<label>Price From</label>
				{{ Form::number('minprice', null, ['class'=>'form-control', 'placeholder'=>'Enter Minimum Price Here..']) }}
			</div>
			<div class="col-sm-3 form-group">
				<label>Price To</label>
				{{ Form::text('maxprice', null, ['class'=>'form-control', 'placeholder'=>'Enter maximum Here..']) }}
			</div>
				<div class="col-sm-3 form-group">
				<label>Category</label>
				{{ Form::text('category', null, ['class'=>'form-control', 'placeholder'=>'Enter category Here..']) }}
			</div>
			{{ Form::submit(__('Submit'), ['class' => 'btn btn-success pull-center']) }}
			{{ Form::close() }} 
		</div>
	</div>
</div>



@endsection