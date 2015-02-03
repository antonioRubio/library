<?php

class Tag extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tags';
    protected $fillable = ['name'];

    public function books()
    {
        return $this->belongsToMany('Book');
    }
}