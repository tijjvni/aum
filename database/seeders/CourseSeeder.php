<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public  $courses = array(
        [
            'department_id' =>  '1',
            'programmes' => 'B.Sc. Biotechnology'
        ],
        [
            'department_id' =>  '2',
            'programmes' => 'B.Sc. Biochemistry'
        ],
        [
            'department_id' =>  '2',
            'programmes' => 'B.Sc. Petroleum Chemistry'
        ],
        [
            'department_id' =>  '3',
            'programmes' => 'B.Sc. Computer Science'
        ],
        [
            'department_id' =>  '3',
            'programmes' => 'B.Sc. Cyber Security'
        ],
        [
            'department_id' =>  '3',
            'programmes' => 'B.Sc. Software Engineering'
        ],
        [
            'department_id' =>  '4',
            'programmes' => 'B.Sc. Industrial Mathematics'
        ],
        [
            'department_id' =>  '5',
            'programmes' => 'B.Sc. Physics and Electronics'
        ],
        [
            'department_id' =>  '6',
            'programmes' => 'B.Sc. Accounting'
        ],
        [
            'department_id' =>  '7',
            'programmes' => 'B.Sc. Islamic Studies'
        ],
        [
            'department_id' =>  '7',
            'programmes' => 'B.A. Arabic'
        ],
        [
            'department_id' =>  '8',
            'programmes' => 'B.Sc. Entrepreneurship'
        ],
        [
            'department_id' =>  '8',
            'programmes' => 'B.Sc. Procurement Management'
        ],
        [
            'department_id' =>  '9',
            'programmes' => 'B.Sc. Economics'
        ],
        [
            'department_id' =>  '10',
            'programmes' => 'B.Sc. Mass communication'
        ],
        [
            'department_id' =>  '11',
            'programmes' => 'B.Sc. Peace Studies and conflict resolution'
        ],
        [
            'department_id' =>  '12',
            'programmes' => 'B.Sc. Criminology and Security Studies'
        ],
        [
            'department_id' =>  '13',
            'programmes' => 'B.Sc. Human Anatomy'
        ],
        [
            'department_id' =>  '14',
            'programmes' => 'B.Sc. Human Physiology'
        ],
        [
            'department_id' =>  '15',
            'programmes' => 'B.NSe. Nursing Science'
        ],
        [
            'department_id' =>  '16',
            'programmes' => 'B.Sc. Public Health'
        ],
        [
            'department_id' =>  '17',
            'programmes' => 'BMLS'
        ],
    );
    
    public function run()
    {
        foreach ($this->courses as $course) {
            Course::create([
                'department_id' => $course['department_id'],
                'programmes' => $course['programmes']
            ]);
        }
    }
}