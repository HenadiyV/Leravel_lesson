<?php

use Illuminate\Database\Seeder;

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
            ['number_room'=>'11'],
            ['number_room'=>'12'],
            ['number_room'=>'13'],
            ['number_room'=>'14'],
            ['number_room'=>'15'],
            ['number_room'=>'21'],
            ['number_room'=>'22'],
            ['number_room'=>'23'],
            ['number_room'=>'24'],
            ['number_room'=>'25'],
            ['number_room'=>'31'],
            ['number_room'=>'32'],
            ['number_room'=>'33'],
            ['number_room'=>'34'],
            ['number_room'=>'35'],
            ['number_room'=>'41'],
            ['number_room'=>'42'],
            ['number_room'=>'43'],
            ['number_room'=>'44'],
            ['number_room'=>'45']
        ];
        DB::table('rooms')->insert($data);

    }
}
