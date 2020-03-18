<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
	protected $primaryKey = 'eid';
	protected $fillable = ['eid', 'name_prefix', 'first_name', 'middle_initial', 'last_name', 'gender', 'email', 'father_name', 'mother_name',
						   'mother_maiden_name', 'date_of_birth', 'joining_date', 'salary', 'ssn', 'phone', 'city', 'state', 'zip'];
	
}
