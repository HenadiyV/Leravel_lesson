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
//            [
//                'surname'=> Str::random(7),
//                'name'=> Str::random(7),
//                'patronymic'=> Str::random(7),
//                'id_profile'=> Str::random(1)
//            ],
            [
                'surname'=> 'Петров',
                'name'=> 'Василий',
                'patronymic'=> 'Иванович',
                'id_profile'=> '1',
                'id_room'=>'1'
            ],            [
                'surname'=> 'Иванов',
                'name'=> 'Николай',
                'patronymic'=> 'Иванович',
                'id_profile'=> '2',
                'id_room'=>'2'
            ],            [
                'surname'=> 'Смирнова',
                'name'=> 'Ольга',
                'patronymic'=> 'Ивановна',
                'id_profile'=>'3',
                'id_room'=>'3'
            ],            [
                'surname'=> 'Кушнир',
                'name'=> 'Людмила',
                'patronymic'=> 'Васильевна',
                'id_profile'=>'4',
                'id_room'=>'4'
            ],            [
                'surname'=> 'Акумова',
                'name'=> 'Енеса',
                'patronymic'=> 'Аркадиевна',
                'id_profile'=>'5',
                'id_room'=>'5'
            ],            [
                'surname'=> 'Примаков',
                'name'=> 'Эдуард',
                'patronymic'=> 'Петрович',
                'id_profile'=>'6',
                'id_room'=>'6'
            ],            [
                'surname'=> 'Кожемякин',
                'name'=> 'Василий',
                'patronymic'=> 'Степанович',
                'id_profile'=>'7',
                'id_room'=>'7'
            ],            [
                'surname'=> 'Коцюба',
                'name'=> 'Евгения',
                'patronymic'=> 'Николаевна',
                'id_profile'=>'8',
                'id_room'=>'8'
            ],            [
                'surname'=> 'Кирпа',
                'name'=> 'Олег',
                'patronymic'=> 'Николаевич',
                'id_profile'=>'9',
                'id_room'=>'9'
            ],            [
                'surname'=> 'Мамчур',
                'name'=> 'Зинаида',
                'patronymic'=> 'Михайловна',
                'id_profile'=>'10',
                'id_room'=>'10'
            ],            [
                'surname'=> 'Алексеев',
                'name'=> 'Степан',
                'patronymic'=> 'Степаныч',
                'id_profile'=>'11',
                'id_room'=>'11'
            ],            [
                'surname'=> 'Крузенштейн',
                'name'=> 'Абрам',
                'patronymic'=> 'Христофорович',
                'id_profile'=>'19',
                'id_room'=>'12'
            ]
        ];
        DB::table('doctors')->insert($data);
    }
}
