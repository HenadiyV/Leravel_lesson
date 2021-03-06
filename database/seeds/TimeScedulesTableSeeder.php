<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeScedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['time'=>'00:00:00'],
            ['time'=>'08:00:00'],
            ['time'=>'08:20:00'],
            ['time'=>'08:40:00'],
            ['time'=>'09:00:00'],
            ['time'=>'09:20:00'],
            ['time'=>'09:40:00'],
            ['time'=>'10:00:00'],
            ['time'=>'10:20:00'],
            ['time'=>'10:40:00'],
            ['time'=>'11:00:00'],
            ['time'=>'11:20:00'],
            ['time'=>'11:40:00'],
            ['time'=>'12:00:00'],
            ['time'=>'12:20:00'],
            ['time'=>'12:40:00'],
            ['time'=>'13:00:00'],
            ['time'=>'13:20:00'],
            ['time'=>'13:40:00'],
            ['time'=>'14:00:00'],
            ['time'=>'14:20:00'],
            ['time'=>'14:40:00'],
            ['time'=>'15:00:00'],
            ['time'=>'15:20:00'],
            ['time'=>'15:40:00'],
            ['time'=>'16:00:00'],
            ['time'=>'16:20:00'],
            ['time'=>'16:40:00'],
            ['time'=>'17:00:00'],
            ['time'=>'17:20:00'],
            ['time'=>'17:40:00'],
            ['time'=>'18:00:00'],
            ['time'=>'18:20:00'],
            ['time'=>'18:40:00'],
            ['time'=>'19:00:00'],
            ['time'=>'19:20:00'],
            ['time'=>'19:40:00'],
            ['time'=>'20:00:00'],
            ['time'=>'00:00:00']
        ];
        DB::table('time_schedules')->insert($data);
    }
}
