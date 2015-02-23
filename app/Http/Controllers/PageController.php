<?php namespace Grinder\Http\Controllers;

use Grinder\Http\Requests;
use Grinder\Http\Controllers\Controller;
use Grinder\Services\PageService;
use Grinder\Http\Requests\PageRequest;

use Illuminate\Http\Request;

class PageController extends Controller {

    protected $page;

    public function __construct(PageService $page){
        $this->page = $page;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $pages = $this->page->all();

        return view('pages.index', compact('pages'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return view('pages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PageRequest $request)
	{
		//
        $page = $this->page->create($request->all());
        return redirect()->route('page.index');
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
        //  http://stackoverflow.com/questions/26630985/how-do-i-catch-exceptions-missing-pages-in-laravel-5
        $page = $this->page->bySlug($slug);
        return view('pages.show', compact('page'));
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
        $page = $this->page->bySlug($slug);
        return view('pages.edit', compact('page'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(PageRequest $request, $id)
	{
        $page = $this->page->byId($id);
        $page->update($request->all());
        return redirect()->route('page.show', ['page' => $request->get('slug')]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
