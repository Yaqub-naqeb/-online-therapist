<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blogs;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();



        blogs::create( [
           
            'title' => 'Laravel Senior Developer', 
            'desc' => 'laravel, javascript',         
           
        ]);

        blogs::create( [
          
            'title' => 'react Senior Developer', 
            'desc' => ' javascript',
            
          ]);

          
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}