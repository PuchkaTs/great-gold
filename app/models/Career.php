<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Reminders\RemindableTrait;

class Career extends Eloquent{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'career';
    protected $fillable = ['header_mn', 'header_en', 'body_mn', 'body_en'];


}
