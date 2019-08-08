<?php

namespace Hackathon\Controllers;

use Hackathon\Models\Product;

class ProductController extends Controller
{

	/**
     * Display a listing of the product.
     *
     */
    public function index($request, $response)
    {
        $products	= Product::find_many();
		return $this->container->view->render($response, 'home.twig', [
			"products"	=> $products
		]);
    }

    /**
     * Show the form for creating a new product.
     *
     */
    public function create($request, $response)
    {
        //
    }

    /**
     * Store a newly created product in storage.
     *
     */
    public function store($request, $response)
    {
        //
    }

    /**
     * Display the specified product.
     *
     */
    public function show($request, $response)
    {
        //
    }

    /**
     * Show the form for editing the specified product.
     *
     */
    public function edit($request, $response)
    {
        //
    }

    /**
     * Update the specified product in storage.
     *
     */
    public function update($request, $response)
    {
        //
    }

    /**
     * Remove the specified product from storage.
     *
     */
    public function destroy($request, $response)
    {
        //
    }

    /**
     * Display a listing of the product filtered by c ategory.
     *
     */
    public function category($request, $response)
    {
        //
    }
}