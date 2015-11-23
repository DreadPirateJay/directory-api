<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->integer('supervisor_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('photo')->default('');
            $table->string('thumbnail')->default('');
            $table->date('hire_date')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('company')->default('');
            $table->string('department')->default('');
            $table->string('title')->default('');
            $table->string('address')->default('');
            $table->string('phone')->default('');
            $table->text('notes')->default('');
            $table->text('personal_address')->default('');
            $table->string('personal_phone')->default('');
            $table->string('emergency_contact')->default('');
            $table->string('emergency_relation')->default('');
            $table->string('emergency_phone')->default('');
            $table->integer('vacation_used')->default(0);
            $table->integer('sick_used')->default(0);
            $table->integer('bereavement_used')->default(0);
            $table->integer('unpaid_used')->default(0);
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
