<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public  $departments = array(
        [
            'faculty_id' =>  '1',
            'name' => 'Biological Sciences'
        ],
        [
            'faculty_id' =>  '1',
            'name' => 'Chemical Sciences'
        ],
        [
            'faculty_id' =>  '1',
            'name' => 'Computer Sciences'
        ],
        [
            'faculty_id' =>  '1',
            'name' => 'Mathematics'
        ],
        [
            'faculty_id' =>  '1',
            'name' => 'Physics'
        ],
        // Arts, Management science
        [
            'faculty_id' =>  '2',
            'name' => 'Accounting and Finance'
        ],
        [
            'faculty_id' =>  '2',
            'name' => 'Arabic and Islamic Studies'
        ],
        [
            'faculty_id' =>  '2',
            'name' => 'Business Adminstration'
        ],
        [
            'faculty_id' =>  '2',
            'name' => 'Economics'
        ],
        [
            'faculty_id' =>  '2',
            'name' => 'Mass Communication'
        ],
        [
            'faculty_id' =>  '2',
            'name' => 'Political Science'
        ],
        [
            'faculty_id' =>  '2',
            'name' => 'Sociology'
        ],
        // Medicine, & Health science
        [
            'faculty_id' =>  '3',
            'name' => 'Human Anatomy'
        ],
        [
            'faculty_id' =>  '3',
            'name' => 'Human Physiology'
        ],
        [
            'faculty_id' =>  '3',
            'name' => 'Nursing Science'
        ],
        [
            'faculty_id' =>  '3',
            'name' => 'Public Health'
        ],
        [
            'faculty_id' =>  '3',
            'name' => 'Medical Lab Science'
        ],
    );
    public function run()
    {
        foreach ($this->departments as $department) {
            Department::create([
                'faculty_id' => $department['faculty_id'],
                'name' => $department['name']
            ]);
        }
    }
}