<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\Rolseeder;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);




        $this->call(Rolseeder::class);
        User::create([
            'name' => 'Santiago Perea Murillo',
            'email' => 'santiagopereamurillo@gmail.com',
            'password' => bcrypt("12345678")
        ])->assignRole('Admin');

        User::create([
            'name' => 'IIAP',
            'email' => 'iiap.org.com',
            'password' => bcrypt("12345678")
        ])->assignRole('Blogger');

        Category::create([
            'id' => 1,
            'name' => 'Articulos',
            'slug' => 'articulos'
        ]);
        Category::create([
            'id' => 2,
            'name' => 'Sliders',
            'slug' => 'sliders'
        ]);
        Category::create([
            'id' => 3,
            'name' => 'educacion',
            'slug' => 'educacion'
        ]);
        Category::create([
            'id' => 4,
            'name' => 'convocatoria',
            'slug' => 'convocatoria'
        ]);
        Category::create([
            'id' => 5,
            'name' => 'contratacion',
            'slug' => 'contratacion'
        ]);
    }
}
