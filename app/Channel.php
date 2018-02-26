<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
        //return parent::getRouteKeyName(); //todo:change the autogenerated stub
    } 

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }

}