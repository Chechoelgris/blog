<?php
use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Tag();
        $category->name = "Primer Tag";
        $category->slug = "primer_tag";
        $category->save();

        $category = new Tag();
        $category->name = "Segundo Tag";
        $category->slug = "segundo_tag";
        $category->save();


    }
}
