@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
					<a class="float-right btn btn-primary" href="/employee/create">Add New Employee</a>
				</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					@if(isset($employees))
                    <table>
					 	<thead>
							<th width="70px;">SI</th>
							<th width="170px;">Employee ID</th>
							<th width="170px;">First Name</th>
							<th width="170px;">Last Name</th>
							<th width="170px;">Email</th>
					 	</thead>
						<tbody>
							@foreach($employees as $index => $employee)
							
							<tr>
							<td>{{++$index}}</td>
							<td><a href="/employee/{{$employee->eid}}">{{$employee->eid}}</a></td>
							<td>{{$employee->first_name}}</td>
							<td><a href="/employee/{{$employee->eid}}">{{$employee->last_name}}</a></td>
							<td>{{$employee->email}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
