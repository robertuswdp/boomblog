<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
Use App\Models\Category;
use App\Models\Post;

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
            'name'  => 'Satine Zaneta',
            'username' => 'satinezaneta',
            'email' => 'satine@gmail.com',
            'password'  => bcrypt('12345')
        ]);

        // User::create([
        //     'name'  => 'Robertus Wanda',
        //     'email' => 'robertus@gmail.com',
        //     'password'  => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Post::factory(25)->create();

        // Post::create([
        //     'title'    => 'Judul Pertama',
        //     'slug'     => 'judul-pertama',
        //     'excerpt'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur enim similique rerum praesentium, quas id saepe numquam voluptas exercitationem culpa reprehenderit ipsum eos quaerat at ex accusantium sapiente placeat ut in nihil repellat tempore? Nobis laudantium ipsum minima ipsam magnam ratione molestias commodi tenetur recusandae odit, rem voluptates porro sapiente doloremque cupiditate excepturi nihil, hic iste, id nemo? Eligendi optio, dolorem omnis rem, sequi fugiat vitae nihil laborum minima architecto eius! Magnam voluptatum error natus deleniti perferendis. Nam obcaecati minima quod recusandae est quidem quibusdam autem molestias, consectetur, cum cupiditate vel voluptates corporis ipsum animi aliquam! Necessitatibus et rerum eum?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title'    => 'Judul Ke Dua',
        //     'slug'     => 'judul-ke-dua',
        //     'excerpt'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur enim similique rerum praesentium, quas id saepe numquam voluptas exercitationem culpa reprehenderit ipsum eos quaerat at ex accusantium sapiente placeat ut in nihil repellat tempore? Nobis laudantium ipsum minima ipsam magnam ratione molestias commodi tenetur recusandae odit, rem voluptates porro sapiente doloremque cupiditate excepturi nihil, hic iste, id nemo? Eligendi optio, dolorem omnis rem, sequi fugiat vitae nihil laborum minima architecto eius! Magnam voluptatum error natus deleniti perferendis. Nam obcaecati minima quod recusandae est quidem quibusdam autem molestias, consectetur, cum cupiditate vel voluptates corporis ipsum animi aliquam! Necessitatibus et rerum eum?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title'    => 'Judul Ke Tiga',
        //     'slug'     => 'judul-ke-tiga',
        //     'excerpt'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur enim similique rerum praesentium, quas id saepe numquam voluptas exercitationem culpa reprehenderit ipsum eos quaerat at ex accusantium sapiente placeat ut in nihil repellat tempore? Nobis laudantium ipsum minima ipsam magnam ratione molestias commodi tenetur recusandae odit, rem voluptates porro sapiente doloremque cupiditate excepturi nihil, hic iste, id nemo? Eligendi optio, dolorem omnis rem, sequi fugiat vitae nihil laborum minima architecto eius! Magnam voluptatum error natus deleniti perferendis. Nam obcaecati minima quod recusandae est quidem quibusdam autem molestias, consectetur, cum cupiditate vel voluptates corporis ipsum animi aliquam! Necessitatibus et rerum eum?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title'    => 'Judul Ke Empat',
        //     'slug'     => 'judul-ke-empat',
        //     'excerpt'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur enim similique rerum praesentium, quas id saepe numquam voluptas exercitationem culpa reprehenderit ipsum eos quaerat at ex accusantium sapiente placeat ut in nihil repellat tempore? Nobis laudantium ipsum minima ipsam magnam ratione molestias commodi tenetur recusandae odit, rem voluptates porro sapiente doloremque cupiditate excepturi nihil, hic iste, id nemo? Eligendi optio, dolorem omnis rem, sequi fugiat vitae nihil laborum minima architecto eius! Magnam voluptatum error natus deleniti perferendis. Nam obcaecati minima quod recusandae est quidem quibusdam autem molestias, consectetur, cum cupiditate vel voluptates corporis ipsum animi aliquam! Necessitatibus et rerum eum?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
