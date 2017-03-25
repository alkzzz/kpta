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
      DB::statement('SET FOREIGN_KEY_CHECKS=0');
      DB::table('roles')->truncate();
      DB::table('users')->truncate();
      DB::table('user_has_roles')->truncate();
      DB::table('menus')->truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS=1');

      // CALL SEEDER
      $this->call(UsersTableSeeder::class);
      $this->call(MenuTableSeeder::class);

      // INSERT ADMIN PRODI
      $prodi = [
        ['name' => 'Teknik Sipil',
        'username' => 'sipil',
        'email' => 'sipil@ft.com',
        'password' => bcrypt('12345'),
        'remember_token' => str_random(10)],

        ['name' => 'Teknik Kimia',
        'username' => 'kimia',
        'email' => 'kimia@ft.com',
        'password' => bcrypt('12345'),
        'remember_token' => str_random(10)],

        ['name' => 'Arsitektur',
        'username' => 'arsitek',
        'email' => 'arsitek@ft.com',
        'password' => bcrypt('12345'),
        'remember_token' => str_random(10)],

        ['name' => 'Teknik Lingkungan',
        'username' => 'tekling',
        'email' => 'tekling@ft.com',
        'password' => bcrypt('12345'),
        'remember_token' => str_random(10)],

        ['name' => 'Teknik Mesin',
        'username' => 'mesin',
        'email' => 'mesin@ft.com',
        'password' => bcrypt('12345'),
        'remember_token' => str_random(10)],

        ['name' => 'Teknik Pertambangan',
        'username' => 'tambang',
        'email' => 'tambang@ft.com',
        'password' => bcrypt('12345'),
        'remember_token' => str_random(10)],

        ['name' => 'Teknik Informatika',
        'username' => 'ti',
        'email' => 'ti@ft.com',
        'password' => bcrypt('12345'),
        'remember_token' => str_random(10)]
      ];
      foreach ($prodi as $prodi) {
        \DB::table('users')->insert($prodi);
      }

      $admin = App\User::find(1);
      $admin->assignRole('fakultas');

      $user_prodi = App\User::where('id','!=',1)->take(7)->get();
      foreach ($user_prodi as $pro) {
        $pro->assignRole('prodi');
      }

    }
}
