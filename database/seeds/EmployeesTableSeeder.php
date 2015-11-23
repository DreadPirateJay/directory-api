<?php

use App\Models\Employee;
use App\Models\Role;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->truncate();

        $faker = \Faker\Factory::create();

        $admin = Employee::create([
            'first_name' => 'Admin',
            'last_name'  => 'User',
            'email'      => 'admin@example.com',
            'password'   => bcrypt('admin'),
        ]);

    }
}
