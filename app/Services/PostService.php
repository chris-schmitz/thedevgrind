<?php namespace Grinder\Services;

use Grinder\Post;
use Grinder\Http\Requests\PostRequest;

class PostService {

    protected $post;

    public function __construct(Post $post){
        $this->post = $post;
    }
    /**
     * Get all posts.
     * 
     * @return  \Illuminate\Database\Eloquent\Collection
     */
    public function all(){
        // ToDo: if we add any admin-only posts, we should add some middleware
        // to the service so that only authenticated users can get to into
        // the admin only posts. 
        return $this->post->all();
    }

    /**
     * Get the post by the slug value.
     *
     * @param string The string value that matches the slug for the post.
     *
     * @return Eloquent model
     */
    public function bySlug($slug){
        return $this->post->where('slug', $slug)->firstOrFail();
    }

    /**
     * Get the post by the id value.
     *
     * @param int The int value that is the id of the record.
     *
     * @return Eloquent model
     */
    public function byId($id){
        return $this->post->findOrFail($id);
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
