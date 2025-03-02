<?php

namespace Database\Seeders;

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
      $this->call(RoleSeeder::class);
      $this->call(UserSeeder::class);
      $this->call(TagSeeder::class);
      $this->call(TypeSeeder::class);
      $this->call(UploadSeeder::class);
      $this->call(CommentSeeder::class);
      $this->call(CountySeeder::class);
      $this->call(GigSeeder::class);
      $this->call(FavouriteSeeder::class);
    }
}
