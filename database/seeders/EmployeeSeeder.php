<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        Employee::create([
            'name' => 'Budi Santoso',
            'age' => 30,
            'address' => 'Jl. Merdeka No.10, Jakarta',
            'phone' => '081234567890'
        ]);

        Employee::create([
            'name' => 'Siti Aminah',
            'age' => 25,
            'address' => 'Jl. Kenangan No.5, Bandung',
            'phone' => '081298765432'
        ]);
    }
}
