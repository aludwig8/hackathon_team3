<?php

namespace Hackathon\Controllers;

use Hackathon\Models\Order;

/**
 * 
 */
class OrderController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     */
    public function index($request, $response)
    {
        $orders = Order::find_many();
		return $this->container->view->render($response, 'Place the appropriate view here', [
			"orders"    => $orders
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
        $order  = Order::create();
        $order->order_user_id           = $request->getParam('order_user_id');
        $order->order_product_id        = $request->getParam('order_product_id');
        $order->order_quantity          = $request->getParam('order_quantity');
        $order->order_price             = $request->getParam('order_price');
        $order->order_ship_name         = $request->getParam('order_ship_name');
        $order->order_ship_address      = $request->getParam('order_ship_address');
        $order->order_city              = $request->getParam('order_city');
        $order->order_zip               = $request->getParam('order_zip');
        $order->order_country           = $request->getParam('order_country');
        $order->order_phone             = $request->getParam('order_phone');
        $order->order_shipping          = $request->getParam('order_shipping');
        $order->order_date              = $request->getParam('order_date');
        $order->order_shipped           = $request->getParam('order_shipped');
        $order->save();

        return $response->withRedirect($this->router->pathFor('order.create'));
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($request, $response)
    {
        $id     = $request->getAttribute('id');
        $order	= Order::find_one($id);
        return $this->container->view->render($response, 'Place the appropriate view here', [
			"order"    => $order
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
        $id     = $request->getAttribute('id');
        $order  = Order::find_one($id);
        $order->order_user_id           = $request->getParam('order_user_id');
        $order->order_product_id        = $request->getParam('order_product_id');
        $order->order_quantity          = $request->getParam('order_quantity');
        $order->order_price             = $request->getParam('order_price');
        $order->order_ship_name         = $request->getParam('order_ship_name');
        $order->order_ship_address      = $request->getParam('order_ship_address');
        $order->order_city              = $request->getParam('order_city');
        $order->order_zip               = $request->getParam('order_zip');
        $order->order_country           = $request->getParam('order_country');
        $order->order_phone             = $request->getParam('order_phone');
        $order->order_shipping          = $request->getParam('order_shipping');
        $order->order_date              = $request->getParam('order_date');
        $order->order_shipped           = $request->getParam('order_shipped');
        $order->save();

        return $response->withRedirect($this->router->pathFor('order.edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($request, $response)
    {
        $id     = $request->getAttribute('id');
        $order  = Order::find_one($id);
        $order->delete();

        return $response->withRedirect($this->router->pathFor('orders'));
    }
}