<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Maillist;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Profile;
use App\Models\Tag;
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
        /* Generate Dummy Data*/

        /* Admin User  */

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@writeups.com',
            'password' => bcrypt('admin123'),
            'is_admin' => 1,
        ]);

        /* Test User */

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@writeups.com',
            'password' => bcrypt('test1234'),
        ]);

        User::factory(25)->create();
        Profile::factory(25)->create();
        Post::factory(65)->create();
        Tag::factory(15)->create();
        Maillist::factory(10)->create();
        Comment::factory(50)->create();
        PostTag::factory(65)->create();
    }
}
