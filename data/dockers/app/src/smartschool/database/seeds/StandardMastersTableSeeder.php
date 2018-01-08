<?php

use Illuminate\Database\Seeder;

class StandardMastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	DB::table('standard_masters')->delete();
	DB::table('standard_masters')->insert([
            'title' => 'Play',
            'description' => 'Student will be involvled in variaous kind of playful activity and learning through those activity',
            'age_range' => '3~4',
        ]);
	DB::table('standard_masters')->insert([
            'title' => 'Nursery',
            'description' => 'Student will be taught various primary knowledge and discipline activity',
            'age_range' => '4~5',
        ]);
	DB::table('standard_masters')->insert([
            'title' => 'KG',
            'description' => 'Student will be taught various advanced knowledge on Maths, English, Science etc',
            'age_range' => '5~6',
        ]);
	DB::table('standard_masters')->insert([
            'title' => 'Standard 1',
            'description' => 'Student will be taught various advanced knowledge on Maths, English, Science etc',
            'age_range' => '6~7',
        ]);
    }
}
