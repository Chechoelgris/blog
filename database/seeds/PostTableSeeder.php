<?php
use App\Post;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $post->title = "Mi Primer Post";
        $post->extract = "Extracto de mi primer post";
        $post->body = "Contenido de mi primer post";
        $post->category_id = 1;
        $post->published_at = Carbon::now();
        $post->save();

        $post = new Post;
        $post->title = "Mi Segundo Post";
        $post->extract = "Extracto de mi segundo post";
        $post->body = "Contenido de mi segundo post";
        $post->category_id = 2;
        $post->published_at = Carbon::now();
        $post->save();


    }
}
