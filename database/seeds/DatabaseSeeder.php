<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(\App\User::class, 5)->create();
        factory(\App\Cart::class, 5)->create();
        factory(\App\Category::class, 5)->create();
        factory(\App\Product::class, 5)->create();
        factory(\App\Role::class, 5)->create();
        factory(\App\Sale::class, 5)->create();
        factory(\App\Wishlist::class, 5)->create();
        factory(\App\Post::class, 5)->create();
        factory(\App\Photo::class, 5)->create();
        factory(\App\Comment::class, 5)->create();
    }
}
