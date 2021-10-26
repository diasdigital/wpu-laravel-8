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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Myoui Mina',
            'email' => 'mina@twice.com',
            'password' =>bcrypt(12345)
        ]);

        User::create([
            'name' => 'Minatozaki Sana',
            'email' => 'sana@twice.com',
            'password' =>bcrypt(54321)
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quo dignissimos, omnis ad nam eos. Repudiandae eveniet iusto expedita modi asperiores dolorum,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quo dignissimos, omnis ad nam eos. Repudiandae eveniet iusto expedita modi asperiores dolorum, facere nostrum atque dolores. Sit dolores beatae quos inventore dolorum distinctio alias aliquid ratione accusamus reprehenderit. Perspiciatis aspernatur obcaecati laborum voluptatibus architecto ipsam fuga ea dolor, itaque labore a repudiandae fugiat officia incidunt, doloremque animi in repellendus minima maxime. Modi perspiciatis, aspernatur totam animi voluptatibus ipsam ducimus facilis autem pariatur saepe beatae quae iusto cum harum possimus, voluptas quam provident? Corrupti magnam iusto, distinctio repellat rerum nihil accusantium optio deserunt qui unde repellendus assumenda quisquam ea ab odio libero esse! At nemo esse nulla reprehenderit, iure saepe fugiat quia numquam repellendus minus sit commodi quibusdam, illum culpa. Ipsum.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quo dignissimos, omnis ad nam eos. Repudiandae eveniet iusto expedita modi asperiores dolorum,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quo dignissimos, omnis ad nam eos. Repudiandae eveniet iusto expedita modi asperiores dolorum, facere nostrum atque dolores. Sit dolores beatae quos inventore dolorum distinctio alias aliquid ratione accusamus reprehenderit. Perspiciatis aspernatur obcaecati laborum voluptatibus architecto ipsam fuga ea dolor, itaque labore a repudiandae fugiat officia incidunt, doloremque animi in repellendus minima maxime. Modi perspiciatis, aspernatur totam animi voluptatibus ipsam ducimus facilis autem pariatur saepe beatae quae iusto cum harum possimus, voluptas quam provident? Corrupti magnam iusto, distinctio repellat rerum nihil accusantium optio deserunt qui unde repellendus assumenda quisquam ea ab odio libero esse! At nemo esse nulla reprehenderit, iure saepe fugiat quia numquam repellendus minus sit commodi quibusdam, illum culpa. Ipsum.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul angka tiga',
            'slug' => 'judul-angka-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quo dignissimos, omnis ad nam eos. Repudiandae eveniet iusto expedita modi asperiores dolorum,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quo dignissimos, omnis ad nam eos. Repudiandae eveniet iusto expedita modi asperiores dolorum, facere nostrum atque dolores. Sit dolores beatae quos inventore dolorum distinctio alias aliquid ratione accusamus reprehenderit. Perspiciatis aspernatur obcaecati laborum voluptatibus architecto ipsam fuga ea dolor, itaque labore a repudiandae fugiat officia incidunt, doloremque animi in repellendus minima maxime. Modi perspiciatis, aspernatur totam animi voluptatibus ipsam ducimus facilis autem pariatur saepe beatae quae iusto cum harum possimus, voluptas quam provident? Corrupti magnam iusto, distinctio repellat rerum nihil accusantium optio deserunt qui unde repellendus assumenda quisquam ea ab odio libero esse! At nemo esse nulla reprehenderit, iure saepe fugiat quia numquam repellendus minus sit commodi quibusdam, illum culpa. Ipsum.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul empatttt',
            'slug' => 'judul-empatttt',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quo dignissimos, omnis ad nam eos. Repudiandae eveniet iusto expedita modi asperiores dolorum,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quo dignissimos, omnis ad nam eos. Repudiandae eveniet iusto expedita modi asperiores dolorum, facere nostrum atque dolores. Sit dolores beatae quos inventore dolorum distinctio alias aliquid ratione accusamus reprehenderit. Perspiciatis aspernatur obcaecati laborum voluptatibus architecto ipsam fuga ea dolor, itaque labore a repudiandae fugiat officia incidunt, doloremque animi in repellendus minima maxime. Modi perspiciatis, aspernatur totam animi voluptatibus ipsam ducimus facilis autem pariatur saepe beatae quae iusto cum harum possimus, voluptas quam provident? Corrupti magnam iusto, distinctio repellat rerum nihil accusantium optio deserunt qui unde repellendus assumenda quisquam ea ab odio libero esse! At nemo esse nulla reprehenderit, iure saepe fugiat quia numquam repellendus minus sit commodi quibusdam, illum culpa. Ipsum.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
