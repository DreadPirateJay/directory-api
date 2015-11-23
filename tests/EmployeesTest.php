<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EmployeesTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
    	$employee = factory(App\Models\Employee::class)->create();

        $this->get('/api/employees')
        	 ->seeJson([
        	 	'first_name' => $employee->first_name,
        	 	'last_name'  => $employee->last_name,
        	 	'email'      => $employee->email,
        	 ]);
    }
}
