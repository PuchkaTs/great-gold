<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Reminders\RemindableTrait;

class Banner extends Eloquent{



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'banners';
    protected $fillable = ['title', 'image', 'description', 'position'];


    public function menu()
    {
        return $this->belongsToMany('Menu');
    }

}
