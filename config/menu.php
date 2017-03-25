<?php

use Spatie\Menu\Laravel\Menu as AdminMenu;
use Spatie\Menu\Laravel\Html;
use Spatie\Menu\Laravel\Link;

//Menu::macro('fullsubmenuexample', function () {
//    return Menu::new()->prepend('<a href="#"><span> Multilevel PROVA </span> <i class="fa fa-angle-left pull-right"></i></a>')
//        ->addParentClass('treeview')
//        ->add(Link::to('/link1prova', 'Link1 prova'))->addClass('treeview-menu')
//        ->add(Link::to('/link2prova', 'Link2 prova'))->addClass('treeview-menu')
//        ->url('http://www.google.com', 'Google');
//});

AdminMenu::macro('adminlteSubmenu', function ($submenuName) {
    return AdminMenu::new()->prepend('<a href="#"><span> ' . $submenuName . '</span> <i class="fa fa-angle-left pull-right"></i></a>')
        ->addParentClass('treeview')->addClass('treeview-menu');
});
AdminMenu::macro('adminlteMenu', function () {
    return AdminMenu::new()
        ->addClass('sidebar-menu');
});
AdminMenu::macro('adminlteSeparator', function ($title) {
    return Html::raw($title)->addParentClass('header');
});
AdminMenu::macro('fakultas', function () {
    return AdminMenu::adminlteMenu()
        //->add(Html::raw('HEADER')->addParentClass('header'))
        ->action('HomeController@index', 'Dashboard')
        ->add(Link::to('rekap','Rekap'))
        ->add(Link::to('#','Manajemen Dosen'))
        ->add(Link::to('#','Manajemen Kegiatan'))
        //->link('http://www.acacha.org', 'Another link')
//        ->url('http://www.google.com', 'Google')
        //->add(Menu::adminlteSeparator('Acacha Adminlte'))
        #adminlte_menu
        //->add(Menu::adminlteSeparator('SECONDARY MENU'))
        // ->add(AdminMenu::new()->prepend('<a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>')
        //     ->addParentClass('treeview')
        //     ->add(Link::to('/link1', 'Link1'))->addClass('treeview-menu')
        //     ->add(Link::to('/link2', 'Link2'))
        //     //->url('http://www.google.com', 'Google')
        //     //->add(Menu::new()->prepend('<a href="#"><span>Multilevel 2</span> <i class="fa fa-angle-left pull-right"></i></a>')
        //     //    ->addParentClass('treeview')
        //     //    ->add(Link::to('/link21', 'Link21'))->addClass('treeview-menu')
        //     //    ->add(Link::to('/link22', 'Link22'))
        //     //    ->url('http://www.google.com', 'Google')
        //     //)
        // )
//        ->add(
//            Menu::fullsubmenuexample()
//        )
//        ->add(
//            Menu::adminlteSubmenu('Best menu')
//                ->add(Link::to('/acacha', 'acacha'))
//                ->add(Link::to('/profile', 'Profile'))
//                ->url('http://www.google.com', 'Google')
//        )
        ->setActiveFromRequest();
});

AdminMenu::macro('prodi', function() {
        return AdminMenu::adminlteMenu()
        ->action('HomeController@index', 'Dashboard')
        ->add(Link::to('#','Input Data'))
        ->setActiveFromRequest();
});
