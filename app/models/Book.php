<?php
/**
 * Created by PhpStorm.
 * User: administrador
 * Date: 17/01/15
 * Time: 12:34
 */

class Book extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'books';
    protected $fillable = ['name', 'isbn'];
}