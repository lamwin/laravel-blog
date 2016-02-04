<?php namespace App\Http\Controllers;

use App\Category;
use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Redirect;

class BlogsController extends Controller {

	protected $rules = array(
		'title' => ['required', 'min:3'],
		'slug' => ['required'],
		'body' => ['required']
	);

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Category $category)
	{
		return view('blogs.index', compact('category'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Category $category)
	{
		return view('blogs.create', compact('category'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Category $category, Request $request)
	{
		$this->validate($request, $this->rules);

		$input = Input::all();
		$category->id = Input::get('category_id');
		Blog::create($input);

		return Redirect::route('categories.show', $category->slug)->with('message', 'New blog post has been created!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Category $category, Blog $blog)
	{
		return view('blogs.show', compact('category', 'blog'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Category $category, Blog $blog)
	{
		return view('blogs.edit', compact('category', 'blog'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Category $category, Blog $blog, Request $request)
	{
		$this->validate($request, $this->rules);

		$input = array_except(Input::only('title', 'slug', 'body', 'updated_at'), '_method');
		$blog->update($input);

		return Redirect::route('categories.show', [$category->slug, $blog->slug])->with('message', 'Blog post has been updated!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Category $category, Blog $blog)
	{
		$blog->delete();

		return Redirect::route('categories.show', $category->slug)->with('message', 'Blog post has been deleted!');
	}

}
