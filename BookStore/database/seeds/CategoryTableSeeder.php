<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category([
            'code' => '001',
            'name' => 'Maori Culture'
        ]);
        $category->save();

        $category = new Category([
            'code' => '002',
            'name' => 'Business'
        ]);
        $category->save();

        $category = new Category([
            'code' => '003',
            'name' => 'Sports'
        ]);
        $category->save();

        $category = new Category([
            'code' => '004',
            'name' => 'Arts & Music'
        ]);
        $category->save();
    }
}
