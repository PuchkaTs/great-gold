<?php



class Menu extends Eloquent{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menu';
    protected $fillable = ['name', 'position'];


    public function banner()
    {
        return $this->belongsToMany('Banner');
    }

}
