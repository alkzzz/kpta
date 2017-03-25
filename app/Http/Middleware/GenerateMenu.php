<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Menu as MainMenu;
use App\Menu as DBMenu;
use Cocur\Slugify\Slugify;

class GenerateMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $MainMenu = new MainMenu;
        $MainMenu->make('NavMenu', function($menu){
            // Home
            $menu->add('Home', '')->data('position', 0);
            // Menu Dinamis
            $parentMenu = DBMenu::menu()->get();
            $dropdownMenu = DBMenu::dropdown()->get();
            $slugify = new Slugify();
            foreach ($parentMenu as $m) {
                $slug = $slugify->slugify($m->title);
                if ($m->hasChildren) {
                    $menu->add($m->title)->data('position', $m->position)->nickname($slug)->link->href('#');
                    foreach ($dropdownMenu as $d) {
                    if ($m->id == $d->parent_id) {
                        $menu->get($slug)->add($d->title, $d->url)->data('position', $d->position);
                        }
                    }
                } 
                else {
                    $menu->add($m->title, $m->url)->data('position', $m->position);
                }

            }         
        })->sortBy('position', 'asc');
        return $next($request);
    }
}
