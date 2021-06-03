<?php

namespace Database\Seeders;

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
        // * Set specific value on Seeder
        $user = User::factory()->create([
            'name' => 'Grace Cho'
        ]);
        
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
        
        // clear out the first table 
        // User::truncate();
        // Category::truncate(); 
        // Post::truncate();

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My First Post',
        //     'slug' => 'my-fitst-post',
        //     'excerpt' => 'hello world.... fam...',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor molestias neque, accusantium deserunt impedit cupiditate harum sapiente! Vel earum tenetur nam? Harum voluptate corporis quasi ut officia, quas, deserunt voluptatum dolores, saepe distinctio id similique accusantium reiciendis sint? Nobis iure harum similique quaerat aperiam possimus natus maxime, inventore modi, velit sequi sed beatae reprehenderit obcaecati sunt odio tenetur, dolorum odit. Veniam eius tenetur ipsam saepe voluptas aperiam, nesciunt fugiat minus corporis est facilis labore sit culpa a accusantium numquam tempora consequatur ratione quis quos cumque? Dolores nesciunt saepe in minus provident corrupti? Itaque sequi enim aperiam est soluta ipsum sed!</p>',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Second Post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => 'hello world.... personal...',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor molestias neque, accusantium deserunt impedit cupiditate harum sapiente! Vel earum tenetur nam? Harum voluptate corporis quasi ut officia, quas, deserunt voluptatum dolores, saepe distinctio id similique accusantium reiciendis sint? Nobis iure harum similique quaerat aperiam possimus natus maxime, inventore modi, velit sequi sed beatae reprehenderit obcaecati sunt odio tenetur, dolorum odit. Veniam eius tenetur ipsam saepe voluptas aperiam, nesciunt fugiat minus corporis est facilis labore sit culpa a accusantium numquam tempora consequatur ratione quis quos cumque? Dolores nesciunt saepe in minus provident corrupti? Itaque sequi enim aperiam est soluta ipsum sed!</p>',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Third Post',
        //     'slug' => 'my-third-post',
        //     'excerpt' => 'hello world.... work...',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor molestias neque, accusantium deserunt impedit cupiditate harum sapiente! Vel earum tenetur nam? Harum voluptate corporis quasi ut officia, quas, deserunt voluptatum dolores, saepe distinctio id similique accusantium reiciendis sint? Nobis iure harum similique quaerat aperiam possimus natus maxime, inventore modi, velit sequi sed beatae reprehenderit obcaecati sunt odio tenetur, dolorum odit. Veniam eius tenetur ipsam saepe voluptas aperiam, nesciunt fugiat minus corporis est facilis labore sit culpa a accusantium numquam tempora consequatur ratione quis quos cumque? Dolores nesciunt saepe in minus provident corrupti? Itaque sequi enim aperiam est soluta ipsum sed!</p>',
        // ]);
    }
}
