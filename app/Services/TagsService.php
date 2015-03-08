<?php namespace Grinder\Services;

use Grinder\Tag;

class TagsService {
    
    protected $tag;

    public function __construct(Tag $tag){
        $this->tag = $tag;
    }

    public function allList(){
        return $this->tag->lists('name', 'id');
    }
}
