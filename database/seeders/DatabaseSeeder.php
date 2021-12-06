<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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
        User::create([
            'name' => 'Myoui Mina',
            'username' => 'minari',
            'email' => 'mina@gmail.com',
            'password' =>bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Minatozaki Sana',
        //     'email' => 'sana@twice.com',
        //     'password' =>bcrypt(54321)
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(40)->create();
    }
}
