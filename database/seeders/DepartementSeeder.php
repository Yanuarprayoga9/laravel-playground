<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $departementsData = [
            [
                'name' => 'Human Resources',
            ],
            [
                'name' => 'Finance',
            ],
            [
                'name' => 'IT',
            ],
            [
                'name' => 'Marketing',
            ],
            [
                'name' => 'Sales',
            ],
        ];

        foreach ($departementsData as  $value) {
            $departement = Department::create($value);
            $departement->save();
            # code...
        }

    }
    
}
