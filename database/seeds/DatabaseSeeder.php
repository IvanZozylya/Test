<?php

use App\Article;
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
        //$this->call(UsersTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->command->info('Таблица users загружена данными!');


    }
}
