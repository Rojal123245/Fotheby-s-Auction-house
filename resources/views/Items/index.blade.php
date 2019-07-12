@extends('layouts.app')
@section('page_title', $page['page_title'])
@section('content')

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title"><u>Auction Items</u></strong>
						<a href="/items/create" class="btn btn-primary pull-right "> <i class="fa fa-plus"></i>&nbsp;Add Items</a>
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
									<th>Approve</th>
									<th >Action</th>
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
									@if($item->activate == 0)

									<td><a href="{{ route('approve', $item->id)}}" class="btn btn-warning">
										Approve ?</a></td>
										@else
										<td><a href="" class="btn btn-sucess">Approved</a></td>
										@endif
										<td>
											<a href="{{ route('items.edit', $item->id) }}" class="btnEditDep btn btn-primary btn-xs"  title="Update items">
												<i class="fa fa-pencil"></i>
											</a>
											<a href="{{ route('items.destroy', $item->id) }}" >
												<button class="btn btn-danger btn-xs">
													<i class="fa fa-trash-o "></i></button>
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
		
	