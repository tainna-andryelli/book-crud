<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelBook $book): void
    {
        $book->create([
            'title'=>'Furia da noite',
            'pages'=>'200',
            'price'=>'20.99',
            'id_user'=>'1'
        ]);

        $book->create([
            'title'=>'Furia da manhã',
            'pages'=>'200',
            'price'=>'20.99',
            'id_user'=>'2'
        ]);

        $book->create([
            'title'=>'Furia da tarde',
            'pages'=>'200',
            'price'=>'20.99',
            'id_user'=>'3'
        ]);
    }
}
