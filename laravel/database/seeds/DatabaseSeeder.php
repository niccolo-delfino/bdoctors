<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    // RICHIAMO SEED 
    public function run()
    {
        $this->call([
          UsersTableSeeder::class,
          DoctorsTableSeeder::class,
          ServicesTableSeeder::class,
          SpecializationsTableSeeder::class,
          MessagesTableSeeder::class,
          ReviewsTableSeeder::class,
          PromosTableSeeder::class,
        ]);
    }
}
