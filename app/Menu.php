<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'title', 'url'
    ];

    public function scopeMenu($query)
    {
        return $query->where('parent_id', '=', 0);
    }

    public function scopeDropdown($query)
    {
        return $query->where('parent_id', '>', 0);
    }
}
