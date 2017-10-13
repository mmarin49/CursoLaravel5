<?php

namespace PizzaApp;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = ['id'];
    protected $fillable =['name'];

    public function users()
    {
        return $this->hasMany('PizzaApp\User');
    }
}
