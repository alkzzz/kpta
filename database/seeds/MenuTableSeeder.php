<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Menu::class, 'menu', 3)->create();
        factory(App\Menu::class, 'menu_parent', 2)->create();
        factory(App\Menu::class, 'dropdown', 6)->create();
    }
}
