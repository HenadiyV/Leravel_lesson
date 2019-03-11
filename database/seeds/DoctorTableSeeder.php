<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'surname'=> Str::random(7),
                'name'=> Str::random(7),
                'patronymic'=> Str::random(7),
                'id_profile'=> Str::random(1)
            ],
            [
                'surname'=> Str::random(7),
                'name'=> Str::random(7),
                'patronymic'=> Str::random(7),
                'id_profile'=> Str::random(1)
            ],            [
                'surname'=> Str::random(7),
                'name'=> Str::random(7),
                'patronymic'=> Str::random(7),
                'id_profile'=> Str::random(1)
            ],            [
                'surname'=> Str::random(7),
                'name'=> Str::random(7),
                'patronymic'=> Str::random(7),
                'id_profile'=> Str::random(1)
            ],            [
                'surname'=> Str::random(7),
                'name'=> Str::random(7),
                'patronymic'=> Str::random(7),
                'id_profile'=> Str::random(1)
            ],            [
                'surname'=> Str::random(7),
                'name'=> Str::random(7),
                'patronymic'=> Str::random(7),
                'id_profile'=> Str::random(1)
            ],            [
                'surname'=> Str::random(7),
                'name'=> Str::random(7),
                'patronymic'=> Str::random(7),
                'id_profile'=> Str::random(1)
            ],            [
                'surname'=> Str::random(7),
                'name'=> Str::random(7),
                'patronymic'=> Str::random(7),
                'id_profile'=> Str::random(1)
            ],            [
                'surname'=> Str::random(7),
                'name'=> Str::random(7),
                'patronymic'=> Str::random(7),
                'id_profile'=> Str::random(1)
            ],            [
                'surname'=> Str::random(7),
                'name'=> Str::random(7),
                'patronymic'=> Str::random(7),
                'id_profile'=> Str::random(1)
            ],            [
                'surname'=> Str::random(7),
                'name'=> Str::random(7),
                'patronymic'=> Str::random(7),
                'id_profile'=> Str::random(1)
            ],            [
                'surname'=> Str::random(7),
                'name'=> Str::random(7),
                'patronymic'=> Str::random(7),
                'id_profile'=> Str::random(1)
            ],            [
                'surname'=> Str::random(7),
                'name'=> Str::random(7),
                'patronymic'=> Str::random(7),
                'id_profile'=> Str::random(1)
            ]
        ];
        DB::table('doctors')->insert($data);
    }
}
