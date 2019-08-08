<?php

namespace Hackathon\Controllers;

use Hackathon\Models\Category;
/**
 * 
 */
class CategoryController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     */
    public function index($request, $response)
    {
        $categories	= Category::find_many();
		return $this->container->view->render($response, 'Place the appropriate view here', [
			"categories"    => $categories
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create($request, $response)
    {
        return $this->container->view->render($response, 'Place the appropriate view here', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store($request, $response)
    {
        $category   = Category::create();
        $category->category_name    = $request->getParam('name');
        $category->save();

        return $response->withRedirect($this->router->pathFor('category.create'));
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($request, $response)
    {
        $id         = $request->getAttribute('id');
        $category	= Category::find_one($id);
        return $this->container->view->render($response, 'Place the appropriate view here', [
			"category"    => $category
		]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($request, $response)
    {
        return $this->container->view->render($response, 'Place the appropriate view here', []);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update($request, $response)
    {
        $id         = $request->getAttribute('id');
        $category   = Category::find_one($id);
        $category->category_name    = $request->getParam('name');
        $category->save();

        return $response->withRedirect($this->router->pathFor('category.edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($request, $response)
    {
        $id         = $request->getAttribute('id');
        $category   = Category::find_one($id);
        $category->delete();

        return $response->withRedirect($this->router->pathFor('categories'));
    }
}