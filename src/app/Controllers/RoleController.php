<?php

namespace Hackathon\Controllers;

use Hackathon\Models\Role;

/**
 * 
 */
class RoleController extends Controller
{
/**
     * Display a listing of the resource.
     *
     */
    public function index($request, $response)
    {
        $roles	= Role::find_many();
		return $this->container->view->render($response, 'Place the appropriate view here', [
			"roles"    => $roles
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
        $role   = Role::create();
        $role->role_name    = $request->getParam('name');
        $role->save();

        return $response->withRedirect($this->router->pathFor('role.create'));
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($request, $response)
    {
        $id     = $request->getAttribute('id');
        $role   = Role::find_one($id);
        return $this->container->view->render($response, 'Place the appropriate view here', [
			"role"    => $role
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
        $role   = Role::find_one($id);
        $role->role_name    = $request->getParam('name');
        $role->save();

        return $response->withRedirect($this->router->pathFor('role.edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($request, $response)
    {
        $id         = $request->getAttribute('id');
        $role   = Role::find_one($id);
        $role->delete();

        return $response->withRedirect($this->router->pathFor('roles'));
    }
}