<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function getParentNameAttribute()
    {
        if ($this->parent instanceof Menu) {
            return $this->parent->name;
        }

        return 'Root Menu';
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function route($separator = '/')
    {
        if ($this->parent instanceof Menu) {
            return $this->parent->route() . $separator . $this->name;
        } else {
            return $separator . $this->name;
        }
    }
}
