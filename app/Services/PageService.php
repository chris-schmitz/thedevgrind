<?php namespace Grinder\Services;

use Grinder\Page;
use Grinder\Http\Requests\PageRequest;

class PageService {

    protected $page;

    public function __construct(Page $page){
        $this->page = $page;
    }

    /**
     * Return pages marked for navbar
     *
     * @return  \Illuminate\Database\Eloquent\Collection
     */
    public function navPageList(){

        return $this->page->where('showInNavbar', true)->orderBy('order')->lists('title', 'slug');
    }


    /**
     * Get all pages.
     * 
     * @return  \Illuminate\Database\Eloquent\Collection
     */
    public function all(){
        // ToDo: if we add any admin-only pages, we should add some middleware
        // to the service so that only authenticated users can get to into
        // the admin only pages. 
        return $this->page->all();
    }

    /**
     * Get the page by the slug value.
     *
     * @param string The string value that matches the slug for the page.
     *
     * @return Eloquent model
     */
    public function bySlug($slug){
        return $this->page->where('slug', $slug)->firstOrFail();
    }

    /**
     * Get the page by the id value.
     *
     * @param int The int value that is the id of the record.
     *
     * @return Eloquent model
     */
    public function byId($id){
        return $this->page->findOrFail($id);
    }

    /**
     * Create a new page.
     *
     * @param array input An array of input from the request.
     *
     * @return Grinder\Page
     */
    public function create($input){
        return $this->page->create($input);
    }

    /**
     * Update an existing record.
     *
     * @param int id The integer ID of the record to update.
     *
     */
    public function update($id, PageRequest $request){
        $page = $this->page->find($id);
        $page->update($request->all());
    }

    /**
     * Store a new record.
     *
     * @param PageRequest request The PageRequst object to construct the new page from.
     *
     */
    public function store(PageRequest $request){
        $this->page->create($request->all());
    }
    /**
     * Destroy a page.
     *
     * @param int id The primary key of the record to destroy.
     */
    public function destroy($id){
       $this->page->destroy($id);
    }
}
