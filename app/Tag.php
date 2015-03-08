<?php namespace Grinder;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    protected $fillable = [
        'name'
    ];

    public function posts(){
        return $this->belongsToMany('Grinder\Post');
    }
}
