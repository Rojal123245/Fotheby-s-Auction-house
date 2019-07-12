@extends('layouts.app')
@section('page_title', $page['page_title'])
@section('content')
<div class="content mt-3">
	<div class="card">
		<div class="card-header">
			<strong class="card-title">Commission Bids</strong>
		</div>
		<div class="card-body">
			@if(count($allbids) > 0)
			@foreach($allbids as $bids)
			<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
				<span class="badge badge-pill badge-primary">Bids</span>
				{{ $bids->client_email }} has requested for the commission bid of Auction title {{ $bids->item_id}}

			</div>
			@endforeach
			@endif
		</div>
	</div>
</div>


@endsection