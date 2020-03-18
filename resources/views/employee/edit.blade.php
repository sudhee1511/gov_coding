@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Employee
					<a class="float-right btn btn-danger" href="/employee/edit/{{$employee->eid}}">Delete</a>
				</div>
				
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div> 
                    @endif
					<div>
					<form action = "/employee/{{$employee->eid}}" method="post">
						@method("PUT")
						@csrf
						<p>Prefix: <input name="name_prefix" value="{{$employee->name_prefix}}"/></p>
						<p>First Name: <input name="first_name" value="{{$employee->first_name}}"/></p>
						<p>Middle Initial: <input name="middle_initial" value="{{$employee->middle_initial}}"/></p>
						<p>Last Name: <input name="last_name" value="{{$employee->last_name}}"/></p>
						<p>Gender: <input name="gender" value="{{$employee->gender}}"/></p>
						<p>Email: <input name="email" value="{{$employee->email}}"/></p>
						<p>Father's Name: <input name="father_name" value="{{$employee->father_name}}"/></p>
						<p>Mother's Name: <input name="mother_name" value="{{$employee->mother_name}}"/></p>
						<p>Mother's Maiden Name: <input name="mother_maiden_name" value="{{$employee->mother_maiden_name}}"/></p>
						<p>DOB: <input name="date_of_birth" value="{{$employee->date_of_birth}}"/></p>
						<p>Joining Date: <input name="joining_date" value="{{$employee->joining_date}}"/></p>
						<p>Salaray: <input name="salary" value="{{$employee->salary}}"/></p>
						<p>SSN: <input name="ssn" value="{{$employee->ssn}}"/></p>
						<p>Phone: <input name="phone" value="{{$employee->phone}}"/></p>
						<p>City: <input name="city" value="{{$employee->city}}"/></p>
						<p>State: <input name="state" value="{{$employee->state}}"/></p>
						<p>ZIP: <input name="zip" value="{{$employee->zip}}"/></p>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
                </div>
				</form>
            </div>
        </div>
    </div>
</div>
@endsection
