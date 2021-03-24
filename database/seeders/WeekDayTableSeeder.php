<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class WeekDayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
            $day = [
                ['id' => '1','week_day' => 'Monday'],
                ['id' => '2','week_day' => 'Tuesday'],
                ['id' => '3','week_day' => 'Wednesday'],
                ['id' => '4','week_day' => 'Thursday'],
                ['id' => '5','week_day' => 'Friday'],
                ['id' => '6','week_day' => 'Saturday'],
                
            ];
            DB::table('week_days')->insert($day);
        }
}
