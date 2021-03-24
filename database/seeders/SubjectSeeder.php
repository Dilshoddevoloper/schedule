<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
        {
            $subjects = [
                ['id' => '1','name' => 'History'],
                ['id' => '2','name' => 'Maths'],
                ['id' => '3','name' => 'Mather language'],
                ['id' => '4','name' => 'Russian language'],
                ['id' => '5','name' => 'English language'],
                ['id' => '6','name' => 'Biology'],
                ['id' => '7','name' => 'Physics'],
                ['id' => '8','name' => 'Chemistry'],
                ['id' => '9','name' => 'Geography'],
                ['id' => '10','name' => 'Informatics'],
                ['id' => '11','name' => 'Geometry'],
                
            ];
            DB::table('subjects')->insert($subjects);
        }
}
