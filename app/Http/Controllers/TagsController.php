<?php namespace Grinder\Http\Controllers;

use Grinder\Http\Requests;
use Grinder\Http\Controllers\Controller;
use Grinder\Services\TagsService;

use Illuminate\Http\Request;

class TagsController extends Controller {

    protected $tag;

    public function __construct(TagsService $tag){
        $this->tag = $tag;
    }
	//
    public function index(){
        $tags = $this->tag->allList();
        return view('tags.index', compact('tags'));
    }

}
