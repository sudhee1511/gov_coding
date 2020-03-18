<?php

use Illuminate\Database\Seeder;
use App\Employee;


class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //this reads the csv file
		$row = 1;
		if (($handle = fopen(database_path("employee_data.csv"), "r")) !== FALSE) {
			//dump(fgetcsv($handle, 1000, ","));
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				dump($data[0]);
				if($row != 1){
				Employee::create(['eid' => $data[0], 'name_prefix' => $data[1], 'first_name' => $data[2], 'middle_initial' => $data[3], 				'last_name' => $data[4], 'gender' => $data[5], 'email' => $data[6], 'father_name' => $data[7], 'mother_name' => $data[8],
						'mother_maiden_name' => $data[9], 'date_of_birth' => $data[10], 'joining_date' => $data[11], 'salary' => $data[12], 'ssn' => $data[13], 'phone' => $data[14], 'city' => $data[15], 'state' => $data[16], 'zip' => $data[17]]);
				}
				$row++;
			} 
			fclose($handle);
		}
    }
}
