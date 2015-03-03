<?php namespace Grinder\Services;

use Grinder\Post;
use Grinder\Http\Requests\PostRequest;

use \Auth;

class PostService {

    protected $post;

    public function __construct(Post $post){
        $this->post = $post;
    }

    // Todo: all of this `Auth::check()` smells funny. It works at the moment, but consider ways of cleaning it up or optimizing.

    /**
     * Get all posts.
     * 
     * @return  \Illuminate\Database\Eloquent\Collection
     */
    public function all(){
        if(Auth::check()){
            return $this->post->all();
        } else {
            return $this->post->where('published', true)->get();
        }
    }

    public function sixMostRecent(){
        if(Auth::check()){
            return $this->post->all()->take(6);
        } else {
            return $this->post->where('published', true)->get()->take(6);
        }
    }


    /**
     * Get the post by the slug value.
     *
     * @param string The string value that matches the slug for the post.
     *
     * @return Eloquent model
     */
    public function bySlug($slug){
        if(Auth::check()){
            return $this->post->where('slug', $slug)->firstOrFail();
        } else {
            return $this->post->where([ 'slug' => $slug, 'published' => true])->firstOrFail();
        }
    }

    /**
     * Get the post by the id value.
     *
     * @param int The int value that is the id of the record.
     *
     * @return Eloquent model
     */
    public function byId($id){
        if(Auth::check()){
            return $this->post->findOrFail($id);
        } else {
            return $this->post->where('published', true)->findOrFail($id);
        }
    }

    /**
     * Create a new post.
     *
     * @param array input An array of input from the request.
     *
     * @return Grinder\Post
     */
    public function create($input){
        return $this->post->create($input);
    }

    /**
     * Update an existing record.
     *
     * @param int id The integer ID of the record to update.
     *
     */
    public function update($id, PostRequest $request){
        $post = $this->post->find($id);
        $post->update($request->all());
    }

    /**
     * Store a new record.
     *
     * @param PostRequest request The PostRequst object to construct the new post from.
     *
     */
    public function store(PostRequest $request){
        $this->post->create($request->all());
    }
    /**
     * Destroy a post.
     *
     * @param int id The primary key of the record to destroy.
     */
    public function destroy($id){
       $this->post->destroy($id);
    }
}
