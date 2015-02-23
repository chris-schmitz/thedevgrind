<?php namespace Grinder;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    protected $fillable = [
        'title',
        'body',
        'slug'
    ];

}
