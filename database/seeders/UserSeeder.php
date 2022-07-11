<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'info@aum.edu.ng',
            'user_type' => 'admin',
            'password' => Hash::make('aum2022'),
        ]);
        User::create([
            'name' => 'Registrar',
            'email' => 'registrar@aum.edu.ng',
            'user_type' => 'registrar',
            'password' => Hash::make('aumregistrar'),
        ]);
        User::create([
            'name' => 'Admission',
            'email' => 'admissions@aum.edu.ng',
            'user_type' => 'admission',
            'password' => Hash::make('aumadmissions'),
        ]);
    }
}