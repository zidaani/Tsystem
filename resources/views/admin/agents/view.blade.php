

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
				@foreach($agents as $agent)
					<tr>
						<td>{{$agent->id}}</td>
						<td>{{$agent->branch}}</td>
						<td>{{$agent->first_name}}</td>
						<td>{{$agent->last_name}}</td>
						<td>{{$agent->other_name}}</td>
						<td>{{$agent->date_of_birth}}</td>
						<td>{{$agent->sex}}</td>
						<td>{{$agent->education}}</td>
						<td>{{$agent->home_town}}</td>
						<td>{{$agent->residential_address}}</td>
						<td>
							<a href="{{route('agents.show', ['id' => $agents->id]) }}">
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

