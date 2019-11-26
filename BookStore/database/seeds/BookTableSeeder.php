<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new \App\book([
            'category_id' => '1',
            'code' => '001',
            'name' => 'Brazilian Blend Coffee',
            'price' => '3.5',
            'description' => 'Brazilian Blend Coffee',
            'image' => 'book2.jpg',
            'supplier_id' => '1'
        ]);

        $book->save();

        $book = new \App\book([
            'category_id' => '1',
            'code' => '002',
            'name' => 'Balloon Festival',
            'price' => '4.0',
            'description' => 'Balloon Festival',
            'image' => 'book3.jpg',
            'supplier_id' => '2'
        ]);
        $book->save();

        $book = new \App\book([
            'category_id' => '2',
            'code' => '003',
            'name' => 'May your choices reflect your hopes, not your fears',
            'price' => '2.0',
            'description' => 'May your choices reflect your hopes, not your fears',
            'image' => 'book3.jpg',
            'supplier_id' => '2'
        ]);
        $book->save();

        $book = new \App\book([
            'category_id' => '3',
            'code' => '004',
            'name' => 'Classroom Rules',
            'price' => '3.5',
            'description' => 'Classroom Rules',
            'image' => 'book5.png',
            'supplier_id' => '3'
        ]);
        $book->save();
    }
}
