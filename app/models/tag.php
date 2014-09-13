<?php


class Tag extends Eloquent {

    protected $fillable = ['tag_en', 'tag_mn'];

    public function projects()
    {
        return $this->belongsToMany('Project');
    }
}