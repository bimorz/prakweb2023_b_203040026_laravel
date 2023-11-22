<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        
        
        // User::create([
        //     'name' => 'Dimas Prayuda',
        //     'email' => 'dimassprayuda212@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Bimo Resnumurti',
        //     'email' => 'bimoresnumurti@gmail.com',
        //     'password' => bcrypt('12345')
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

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto ullam cum minima, saepe quae ducimus fugiat doloremque,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto ullam cum minima, saepe quae ducimus fugiat doloremque, odit, excepturi quidem in pariatur explicabo repellendus expedita blanditiis neque? Officia quibusdam nobis reprehenderit cum? Id harum maxime temporibus nisi libero cupiditate sequi quae porro beatae commodi corporis itaque, laudantium soluta rem. Molestiae repudiandae ipsa magni, officia placeat nam facere laudantium asperiores iusto doloribus. Non est enim nam commodi labore illum doloribus tempore natus dolorem fugit, inventore ducimus quod laudantium voluptatibus quos vero excepturi rem repellendus fuga nesciunt, consectetur amet. Distinctio hic, eaque placeat consequatur, consectetur voluptate pariatur tenetur dolorum quod eligendi accusamus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto ullam cum minima, saepe quae ducimus fugiat doloremque,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto ullam cum minima, saepe quae ducimus fugiat doloremque, odit, excepturi quidem in pariatur explicabo repellendus expedita blanditiis neque? Officia quibusdam nobis reprehenderit cum? Id harum maxime temporibus nisi libero cupiditate sequi quae porro beatae commodi corporis itaque, laudantium soluta rem. Molestiae repudiandae ipsa magni, officia placeat nam facere laudantium asperiores iusto doloribus. Non est enim nam commodi labore illum doloribus tempore natus dolorem fugit, inventore ducimus quod laudantium voluptatibus quos vero excepturi rem repellendus fuga nesciunt, consectetur amet. Distinctio hic, eaque placeat consequatur, consectetur voluptate pariatur tenetur dolorum quod eligendi accusamus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto ullam cum minima, saepe quae ducimus fugiat doloremque,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto ullam cum minima, saepe quae ducimus fugiat doloremque, odit, excepturi quidem in pariatur explicabo repellendus expedita blanditiis neque? Officia quibusdam nobis reprehenderit cum? Id harum maxime temporibus nisi libero cupiditate sequi quae porro beatae commodi corporis itaque, laudantium soluta rem. Molestiae repudiandae ipsa magni, officia placeat nam facere laudantium asperiores iusto doloribus. Non est enim nam commodi labore illum doloribus tempore natus dolorem fugit, inventore ducimus quod laudantium voluptatibus quos vero excepturi rem repellendus fuga nesciunt, consectetur amet. Distinctio hic, eaque placeat consequatur, consectetur voluptate pariatur tenetur dolorum quod eligendi accusamus!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto ullam cum minima, saepe quae ducimus fugiat doloremque,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto ullam cum minima, saepe quae ducimus fugiat doloremque, odit, excepturi quidem in pariatur explicabo repellendus expedita blanditiis neque? Officia quibusdam nobis reprehenderit cum? Id harum maxime temporibus nisi libero cupiditate sequi quae porro beatae commodi corporis itaque, laudantium soluta rem. Molestiae repudiandae ipsa magni, officia placeat nam facere laudantium asperiores iusto doloribus. Non est enim nam commodi labore illum doloribus tempore natus dolorem fugit, inventore ducimus quod laudantium voluptatibus quos vero excepturi rem repellendus fuga nesciunt, consectetur amet. Distinctio hic, eaque placeat consequatur, consectetur voluptate pariatur tenetur dolorum quod eligendi accusamus!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}