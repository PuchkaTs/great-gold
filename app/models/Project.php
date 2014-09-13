<?php


class Project extends Eloquent {

    protected $fillable = ['body_mn', 'body_en', 'title_mn', 'title_en', 'tag'];


    public function shorten($num = 250){

        $string = strip_tags($this->body_en);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }

    public function image(){
        return $this->hasMany('image');
    }

    public function tags()
    {
        return $this->belongsToMany('tag');
    }
}