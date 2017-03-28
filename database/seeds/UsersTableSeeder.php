<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create();
        factory(App\Dosen::class, 122)->create();
        factory(Spatie\Permission\Models\Role::class, 'fakultas')->create();
        factory(Spatie\Permission\Models\Role::class, 'prodi')->create();
    }
}
