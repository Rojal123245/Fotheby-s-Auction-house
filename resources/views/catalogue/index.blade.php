@extends('main.app')
@section('page_title', $page['page_title'])

@section('content')
@foreach($allItems as $item)
<div class="main" style="margin-top: 7%; margin-left: 29%;">
<div class="container">
	<div class="row row-margin-bottom">
		<div class="col-md-8 no-padding lib-item" data-category="view">
			
				<div class="row box-shadow">
					<div class="col-md-6" style="padding-left: 0px;">
						<img class="lib-img-show" style="padding-left: 0px;" height="300" src="{{ asset('images/new/' . $item->image )}}">
					</div>
					<div class="col-md-6">
						<div class="lib-row lib-header">
							Auction title: {{ $item-> auctiontitle}}
							<div class="lib-header-seperator"></div>
							Location: {{$item->location}}
							<div class="lib-header-seperator"></div>
							Lot Reference Number: {{$item->lotrefno}}
							<div class="lib-header-seperator"></div>
							Lot Number: {{$item->lotno}}
							<div class="lib-header-seperator"></div>
							Date of Production: {{$item->period}}
							<div class="lib-header-seperator"></div>
							Piece Title: {{$item->title}}
							<div class="lib-header-seperator"></div>
							Price: {{$item->price}}
							<div class="lib-header-seperator"></div>
							Dimension: {{$item->dimension}}
							<div class="lib-header-seperator"></div>
							Artist: {{$item->artist}}
							<div class="lib-header-seperator"></div>
						</div>
						<div class="lib-row lib-desc">
							Description: {{ $item-> description}}
							<div class="lib-header-seperator"></div>
							Auction Date: {{ $item-> auctionDate}}
							<div class="lib-header-seperator"></div>
							Auction period: {{ $item-> auctionperiod}}
							<div class="lib-header-seperator"></div>
							
							
							<a href="{{route('commission', $item->id)}}" class="btn btn-primary">Apply Commission bid</a>
							
						</div>
					</div>
				</div>
			
		</div>
	</div>
</div>
</div>
@endforeach
@endsection
<style type="text/css">

.lib-panel {
    margin-bottom: 20Px;
}
.lib-panel img {
    width: 100%;
    background-color: transparent;
}

.lib-panel .row,
.lib-panel .col-md-6 {
    padding: 0;
    background-color: #FFFFFF;
}


.lib-panel .lib-row {
    padding: 0 20px 0 20px;
}

.lib-panel .lib-row.lib-header {
    background-color: #FFFFFF;
    font-size: 20px;
    padding: 10px 20px 0 20px;
}

.lib-panel .lib-row.lib-header .lib-header-seperator {
    height: 2px;
    width: 26px;
    background-color: #d9d9d9;
    margin: 7px 0 7px 0;
}

.lib-panel .lib-row.lib-desc {
    position: relative;
    height: 100%;
    display: block;
    font-size: 13px;
}
.lib-panel .lib-row.lib-desc a{
    position: absolute;
    width: 100%;
    bottom: 10px;
    left: 20px;
}

.row-margin-bottom {
    margin-bottom: 20px;
}

.box-shadow {
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
}

.no-padding {
    padding: 0;
}
</style>
