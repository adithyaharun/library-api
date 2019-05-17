<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('book_types')->insert([
            [
                'name' => 'Majalah',
                'active' => 1
            ],
            [
                'name' => 'Novel',
                'active' => 1
            ],
            [
                'name' => 'Komik',
                'active' => 1
            ],
            [
                'name' => 'Biografi',
                'active' => 1
            ],
            [
                'name' => 'Jurnal',
                'active' => 1
            ],
            [
                'name' => 'Karya Ilmiah',
                'active' => 1
            ],
            [
                'name' => 'Kamus',
                'active' => 1
            ],
            [
                'name' => 'Panduan',
                'active' => 1
            ],
            [
                'name' => 'Cerita Bergambar',
                'active' => 1
            ],
            [
                'name' => 'Antologi',
                'active' => 1
            ],
            [
                'name' => 'Fotografi',
                'active' => 1
            ],
            [
                'name' => 'Novelet',
                'active' => 1
            ],
            [
                'name' => 'Ensiklopedi',
                'active' => 1
            ],
            [
                'name' => 'Tafsir',
                'active' => 1
            ],
            [
                'name' => 'Dongeng',
                'active' => 1
            ],
            [
                'name' => 'Atlas',
                'active' => 1
            ],
            [
                'name' => 'Kitab Suci',
                'active' => 1
            ],
            [
                'name' => 'Koran',
                'active' => 1
            ]
        ]);
    }
}
