<?php namespace Grinder\Http\Composers;

use Illuminate\Contracts\View\View;
use Grinder\Services\PageService;

class NavigationComposer {

    protected $page;
    public function __construct(PageService $page){
        $this->page = $page;
    }

    public function compose(View $view){

        // as you add in anything else that needs to be in the navbar
        // make sure you update this method to include it. Things
        // like user information could be passed in here too.
        $pageList = $this->page->navPageList();
        $view->with('pageList', $pageList);
    }
}
