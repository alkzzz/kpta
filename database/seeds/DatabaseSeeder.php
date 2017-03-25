<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // TRUNCATE TABLE
      DB::table('users')->truncate();
      DB::table('menus')->truncate();

      // CALL SEEDER
      $this->call(UsersTableSeeder::class);
      $this->call(MenuTableSeeder::class);
    }
}
