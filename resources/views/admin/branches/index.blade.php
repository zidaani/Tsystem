

@extends('layouts.admin')


@section('content')
	<div class="container-fluid">
		<table class="table">
			<thead>
				<tr>
					<td>#.</td>
					<td>Name</td>
					<td>Location</td>
					<td>Agent</td>
					<td>Capital</td>
					<td>Date Est.</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tbody>
				@foreach($branches as $branch)
					<tr>
						<td>{{$branch->branch_id}}</td>
						<td>{{$branch->branch_name}}</td>
						<td>{{$branch->branch_location}}</td>
						<td>{{$branch->name_of_agent}}</td>
						<td>{{$branch->branch_capital}}</td>
						<td>{{$branch->date_established}}</td>
						<td>
							<a href="{{route('branches.show', ['id' => $branch->branch_id]) }}">
								<i class="fa fa-search-plus text-info"></i>
							</a>
							<a href="">
								<i class="fa fa-edit text-warning"></i>
							</a>
							<a href="">
								<i class="fa fa-trash text-danger"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	
	</div>
@endsection

