<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\NotebookTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NotebookTableSeeder::class);

        $this->command->info('Success!');

        // \App\Models\User::factory(10)->create();
    }
}
