<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public  $colleges = [
        'Science, Information and Communication Technology',
        'Arts, Management and Social Sciences',
        'Medicine and Health Sciences'
    ];
    public function run()
    {
        foreach ($this->colleges as $college) {
            Faculty::create([
                'college' => $college
            ]);
        }
    }
}