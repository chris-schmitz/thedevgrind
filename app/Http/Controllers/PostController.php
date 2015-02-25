<?php namespace Grinder\Http\Controllers;

use Grinder\Http\Requests;
use Grinder\Http\Controllers\Controller;
use Grinder\Services\PostService;
use Grinder\Http\Requests\PostRequest;

use Illuminate\Http\Request;

class PostController extends Controller {

    protected $post;

    public function __construct(PostService $post){
        $this->post    = $post;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = $this->post->all();

        return view('posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PostRequest $request)
	{
        $this->post->store($request);
        return redirect()->route('post.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		//Todo: go back and read up on how the app/Exceptions section works. read:
        //  http://laravel.com/docs/5.0/errors
        //  http://stackoverflow.com/questions/26630985/how-do-i-catch-exceptions-missing-posts-in-laravel-5
        $post = $this->post->bySlug($slug);
        return view('posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		//
        $post = $this->post->bySlug($slug);
        return view('posts.edit', compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(PostRequest $request, $id)
	{
        $this->post->update($id, $request);
        return redirect()->route('post.show', ['post' => $request->get('slug')]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $this->post->destroy($id);
        return redirect()->route('post.index');
	}

}
