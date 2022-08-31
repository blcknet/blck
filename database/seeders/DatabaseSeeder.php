<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\CommentSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        User::create([
            'name' => 'Luis Olvera',
            'email' => 'luis@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::factory(10)->create();

        Storage::deleteDirectory('public/posts');
        Storage::makeDirectory('public/posts');



        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PostSeeder::class);

        $this->call(CommentSeeder::class);
    }
}
