<?php


class Project extends Eloquent {

    protected $fillable = ['body_mn', 'body_en', 'title_mn', 'title_en', 'tag'];


    public function shorten($num = 250){
        $body = (App::getLocale() == 'en') ? $this->body_en : $this->body_mn;
        $string = strip_tags($body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }

    public function image(){
        return $this->hasMany('Image');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }
}