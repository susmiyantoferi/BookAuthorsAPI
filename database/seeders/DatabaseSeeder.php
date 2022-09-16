<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\AuthorSeeder;

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

        DB::table('users')->insert([
            'name' => 'Feri susmiyanto',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
        ]);

        $this->call(AuthorSeeder::class);
        $this->call(BookSeeder::class);
    }
}
