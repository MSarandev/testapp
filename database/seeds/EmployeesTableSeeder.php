<?php

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
        // Seed the first employee
        DB::table('employees')->insert([
            'firstName' => 'John',
            'lastName' => 'Snow',
            'company' => 'GOT ltd.',
            'email' => 'snow@got.com',
            'phone' => '074123456'
        ]);
    }
}
