<?php

namespace Hackathon\Controllers;

use Hackathon\Models\Product;

class ProductController extends Controller
{
/**
     * Display a listing of the resource.
     *
     */
    public function index($request, $response)
    {
        $products	= Product::find_many();
		return $this->container->view->render($response, 'Place the appropriate view here', [
			"products"    => $products
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
        $product   = Product::create();
        $product->product_name          = $request->getParam('product_name');
        $product->product_price         = $request->getParam('product_price');
        $product->product_weight        = $request->getParam('product_weight');
        $product->product_short_desc    = $request->getParam('product_short_desc');
        $product->product_long_desc     = $request->getParam('product_long_desc');
        $product->product_image         = $request->getParam('product_image');
        $product->product_category_id   = $request->getParam('product_category_id');
        $product->product_update_date   = $request->getParam('product_update_date');
        $product->product_stock         = $request->getParam('product_stock');
        $product->product_active        = $request->getParam('product_active');
        $product->save();

        return $response->withRedirect($this->router->pathFor('product.create'));
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($request, $response)
    {
        $id         = $request->getAttribute('id');
        $product	= Product::find_one($id);
        return $this->container->view->render($response, 'Place the appropriate view here', [
			"product"    => $product
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
        $product    = Product::find_one($id);
        $product->product_name          = $request->getParam('product_name');
        $product->product_price         = $request->getParam('product_price');
        $product->product_weight        = $request->getParam('product_weight');
        $product->product_short_desc    = $request->getParam('product_short_desc');
        $product->product_long_desc     = $request->getParam('product_long_desc');
        $product->product_image         = $request->getParam('product_image');
        $product->product_category_id   = $request->getParam('product_category_id');
        $product->product_update_date   = $request->getParam('product_update_date');
        $product->product_stock         = $request->getParam('product_stock');
        $product->product_active        = $request->getParam('product_active');
        $product->save();

        return $response->withRedirect($this->router->pathFor('product.edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($request, $response)
    {
        $id         = $request->getAttribute('id');
        $product   = Product::find_one($id);
        $product->delete();

        return $response->withRedirect($this->router->pathFor('products'));
    }
}