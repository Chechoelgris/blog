<?php
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Checho";
        $user->email = "so.sepulveda.m@gmail.com";
        $user->password = bcrypt("Checho1234");
        $user->save();
    }
}
