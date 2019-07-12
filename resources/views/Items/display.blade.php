@extends('layouts.app')
@section('page_title', $page['page_title'])
@section('content')

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title"><u>Auction Items: Restore</u></strong>
					
					</div>
					<div class="card-body">
						<table id="bootstrap-data-table-export" class="table table-striped table-bordered" style="padding-left: 71%;">
							<thead>
								<tr>
									<th>SN</th>
									<th>Image</th>
									<th>Title</th>
									<th>Price</th>
									<th>Description</th>
									<th>Dimension</th>
									<th>Artist</th>
									<th>Category</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>

								<?php 
								$count = 1;
								?>
								@if(count($items) > 0)
								@foreach($items as $item)
								<tr>

									<td>{{ $count ++ }}</td>
									<td><img src="{{ asset('images/new/' . $item->image)}}" width="80" height="80" style="padding-left: 0px;" /></td>
									<td>{{ $item->title }}</td>
									<td>{{ $item->price }}</td>
									<td>{{ $item->description }}</td>
									<td>{{ $item->dimension }}</td>
									<td>{{ $item->artist }}</td>
									<td>{{ $item->category }}</td>
					
										<td>
											<a href="{{ route('restore', $item->id) }}" class=" btn btn-primary btn-xs"  title="Restore items">
												<i class="fa fa-refresh"></i>
											</a>
											</td>
										</tr>
										@endforeach
										@endif
									</tbody>
								</table>
							</div>
						</div>
					</div>


				</div>
			</div><!-- .animated -->
		</div>




		@endsection
		
	