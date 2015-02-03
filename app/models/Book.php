<?php

class Book extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'books';
    protected $fillable = ['name', 'isbn'];

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }
}