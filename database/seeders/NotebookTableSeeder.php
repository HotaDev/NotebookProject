<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class NotebookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notebooks')->insert([[
                 'ФИО'           => 'Иванов Иван Иванович',
                 'Компания'      => 'Пик',
                 'Телефон'       => '89151111111',
                 'Email'         => 'Ivanov@mail.ru',
                 'Дата_рождения' => '1990-01-01',
                 'Фото'          => 'Image1.jpg',
             ],
            [
                 'ФИО'           => 'Смирнов Александр Петрович',
                 'Компания'      => 'Яндекс',
                 'Телефон'       => '89152222222',
                 'Email'         => 'Smirnov@mail.ru',
                 'Дата_рождения' => '1990-02-02',
                 'Фото'          => 'Image2.jpg',

            ],
            [
                 'ФИО'           => 'Морозов Владимир Максимович',
                 'Компания'      => 'Пик',
                 'Телефон'       => '89153333333',
                 'Email'         => 'Morozov@mail.ru',
                 'Дата_рождения' => '1995-01-02',
                 'Фото'          => 'Image3.jpg',
            ],
            [
                 'ФИО'           => 'Волков Леонид Дмитриевич',
                 'Компания'      => 'Мегафон',
                 'Телефон'       => '891544444444',
                 'Email'         => 'Volkov@mail.ru',
                 'Дата_рождения' => '1992-04-04',
                 'Фото'          => 'Image4.jpg',
            ],
            [
                 'ФИО'           => 'Петров Павел Валентинович',
                 'Компания'      => 'Альфа-банк',
                 'Телефон'       => '8155555555',
                 'Email'         => 'Petrov@mail.ru',
                 'Дата_рождения' => '1991-03-03',
                 'Фото'          => 'Image5.jpg',
            ],
        ]);
    }
}
