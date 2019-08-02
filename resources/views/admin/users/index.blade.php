

@extends('layouts.admin')


@section('content')
	<div class="container-fluid">
		<table class="table">
			<thead>
				<tr>
					<td>#.</td>
					<td>Branch</td>
					<td>First name</td>
					<td>Last name</td>
					<td>Other name</td>
					<td>Date of Birth</td>
					<td>Sex</td>
					<td>Education</td>
					<td>Home Town</td>
					<td>Residential Address</td>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $users)
					<tr>
						<td>{{$users->id}}</td>
						<td>{{$users->branch}}</td>
						<td>{{$users->first_name}}</td>
						<td>{{$users->last_name}}</td>
						<td>{{$users->other_name}}</td>
						<td>{{$users->date_of_birth}}</td>
						<td>{{$users->sex}}</td>
						<td>{{$users->education}}</td>
						<td>{{$users->home_town}}</td>
						<td>{{$users->residential_address}}</td>
						<td>
							<a href="{{route('users.show', ['users' => $users->id]) }}">
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

