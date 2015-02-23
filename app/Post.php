<?php namespace Grinder;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	//
    protected $fillable = [
        'title',
        'slug',
        'published_on',
        'body'
    ];
}
