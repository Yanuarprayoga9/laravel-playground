<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'name' => 'John Doe',
                'address' => '123 Main St, Anytown',
                'phone_number' => '123-456-7890',
                'email' => 'john.doe@example.com',
                'department_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'address' => '456 Elm St, Another Town',
                'phone_number' => '987-654-3210',
                'email' => 'jane.smith@example.com',
                'department_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Johnson',
                'address' => '789 Oak St, Smallville',
                'phone_number' => '555-123-4567',
                'email' => 'michael.johnson@example.com',
                'department_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily Brown',
                'address' => '101 Pine St, Bigtown',
                'phone_number' => '222-987-6543',
                'email' => 'emily.brown@example.com',
                'department_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'David Lee',
                'address' => '555 Cedar St, Gotham City',
                'phone_number' => '777-456-7890',
                'email' => 'david.lee@example.com',
                'department_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sarah Wilson',
                'address' => '222 Birch St, Metroville',
                'phone_number' => '333-888-5555',
                'email' => 'sarah.wilson@example.com',
                'department_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Daniel Clark',
                'address' => '777 Maple St, Springfield',
                'phone_number' => '999-111-2222',
                'email' => 'daniel.clark@example.com',
                'department_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jessica Martinez',
                'address' => '333 Elm St, Rivertown',
                'phone_number' => '444-555-6666',
                'email' => 'jessica.martinez@example.com',
                'department_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kevin Young',
                'address' => '888 Oak St, Hill Valley',
                'phone_number' => '666-777-8888',
                'email' => 'kevin.young@example.com',
                'department_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lisa Taylor',
                'address' => '444 Pine St, Lakeside',
                'phone_number' => '111-222-3333',
                'email' => 'lisa.taylor@example.com',
                'department_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
         // Insert data into the employees table
         foreach ($employees as $employeeData) {
            Employee::create($employeeData);
        }

    }
}
