<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Reminders\RemindableTrait;

class Image extends Eloquent{



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images';
    protected $fillable = [ 'image', 'description', 'position'];


    public function project()
    {
        return $this->belongsTo('Project');
    }

}
