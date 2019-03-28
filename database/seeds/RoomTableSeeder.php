<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name_room'=>'11'],
            ['name_room'=>'12'],
            ['name_room'=>'13'],
            ['name_room'=>'14'],
            ['name_room'=>'15'],
            ['name_room'=>'21'],
            ['name_room'=>'22'],
            ['name_room'=>'23'],
            ['name_room'=>'24'],
            ['name_room'=>'25'],
            ['name_room'=>'31'],
            ['name_room'=>'32'],
            ['name_room'=>'33'],
            ['name_room'=>'34'],
            ['name_room'=>'35'],
            ['name_room'=>'41'],
            ['name_room'=>'42'],
            ['name_room'=>'43'],
            ['name_room'=>'44'],
            ['name_room'=>'45']
        ];
        DB::table('rooms')->insert($data);

    }
}
