@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employee Details
					<form action = "/employee/{{$employee->eid}}" method="post">
					<a class="float-right btn" href="/employee/{{$employee->eid}}/edit"> Edit</a>
						@method("DELETE")
						@csrf
					<button type="submit" class="float-right btn btn-danger" href="/employee/{{$employee->eid}}">Delete</button>
					</form>
				</div>
				
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div> 
                    @endif
					<div>
						<p>Full Name: {{$employee->name_prefix}} {{$employee->first_name}} {{$employee->middle_initial}} {{$employee->last_name}}</p>
						<p>Gender: {{$employee->gender}}</p>
						<p>Email: {{$employee->email}}</p>
						<p>Father's Name: {{$employee->father_name}}</p>
						<p>Mother's Name:  {{$employee->mother_name}}</p>
						<p>Mother's Maiden Name:  {{$employee->mother_maiden_name}}</p>
						<p>DOB: {{$employee->date_of_birth}}</p>
						<p>Joining Date: {{$employee->joining_date}}</p>
						<p>Salaray:  ${{$employee->salary}}</p>
						<p>SSN: {{$employee->ssn}}</p>
						<p>Phone: {{$employee->phone}}</p>
						<p>City: {{$employee->city}}</p>
						<p>State: {{$employee->state}}</p>
						<p>ZIP: {{$employee->zip}}</p>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
