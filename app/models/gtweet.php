<?php


class Gtweet extends Eloquent{



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gtweets';
    protected $fillable = ['title_en', 'title_mn', 'image', 'status_en', 'status_mn', 'position'];

}
