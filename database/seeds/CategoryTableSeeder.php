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
        $category = new Category();
        $category->name = "Primera Categoria";
        $category->slug = "primera_categoria";
        $category->save();

        $category = new Category();
        $category->name = "Segunda Categoria";
        $category->slug = "segunda_categoria";
        $category->save();
    }
}
