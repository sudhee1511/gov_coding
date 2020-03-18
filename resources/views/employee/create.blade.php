@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Employee
				</div>
				
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div> 
                    @endif
					<div>
					<form action = "/employee" method="post">
						@csrf
						<p>Prefix: <input name="name_prefix"/></p>
						<p>First Name: <input name="first_name"/></p>
						<p>Middle Initial: <input name="middle_initial"/></p>
						<p>Last Name: <input name="last_name" /></p>
						<p>Gender: <input name="gender" /></p>
						<p>Email: <input name="email"/></p>
						<p>Father's Name: <input name="father_name" /></p>
						<p>Mother's Name: <input name="mother_name" /></p>
						<p>Mother's Maiden Name: <input name="mother_maiden_name" /></p>
						<p>DOB: <input name="date_of_birth" /></p>
						<p>Joining Date: <input name="joining_date" /></p>
						<p>Salaray: <input name="salary" /></p>
						<p>SSN: <input name="ssn" /></p>
						<p>Phone: <input name="phone" /></p>
						<p>City: <input name="city"/></p>
						<p>State: <input name="state"/></p>
						<p>ZIP: <input name="zip"/></p>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
                </div>
				</form>
            </div>
        </div>
    </div>
</div>
@endsection
