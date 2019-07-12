@extends('layouts.app')
@section('page_title', $page['page_title'])
@section('content')

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title"><u>Client Details</u></strong>
						
					</div>
					<div class="card-body">
						<table id="bootstrap-data-table-export" class="table table-striped table-bordered" style="padding-left: 71%;">
							<thead>
								<tr>
									<th>SN</th>
									<th>Name</th>
									<th>Address</th>
									<th>Contact No</th>
									<th>Email</th>
									<th>Client Status</th>
									<th>Bank Account</th>
									<th>Approve</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$count = 1;
								?>
								@if(count($clients) > 0)
								@foreach($clients as $cli)
								
								<td>{{ $count ++ }}</td>
								<td>{{ $cli->firstname }} {{ $cli->surname }}</td>
								<td>{{ $cli->address }}</td>
								<td>{{ $cli->contactno }}</td>
								<td>{{ $cli->email }}</td>
								<td>{{ $cli->clientstatus }}</td>
								<td>{{ $cli->bankacno }}</td>
								@if($cli->approved == 0)
								
								<td><a href="{{ route('clientapprove', $cli->id)}}" class="btn btn-warning">
								Approve ?</a></td>
								@else
								<td><a href="" class="btn btn-sucess">Approved</a></td>
								@endif
								<td>
								
									<a href="{{route('disapprove', $cli->id)}}" >
										<button class="btn btn-danger btn-xs">
											<i class="fa fa-trash-o "></i></button>
										</a>
									</td>

								</tbody>
								@endforeach
								@endif
							</table>
						</div>
					</div>
				</div>


			</div>
		</div><!-- .animated -->
	</div>




	@endsection