<?php

namespace Hackathon\Controllers;

use Slim\Views\Twig as View;
use Hackathon\Models\User;

/**
 * 
 */
class UserController extends Controller
{

	/**
     * Display a listing of the resource.
     *
     */
    public function index($request, $response)
    {
    	
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create($request, $response)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store($request, $response)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($request, $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($request, $response)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update($request, $response)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($request, $response)
    {
        //
    }

    //SIGN IN INDEX -> show login index
    public function signin_index($request, $response){

    	return $this->container->view->render($response, 'login.twig');
    }

    //
    public function signin($request, $response){

    	//DUHET TE RREGULLOHET
    }


    //SIGN IN INDEX -> show login index
    public function signup_index($request, $response){

    	return $this->container->view->render($response, 'signup.twig');
    }

    //
    public function signup($request, $response){


        $process = true;
        $message = "";
        $email = $request->getParam('email');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $message = "$email is a valid email address");
          $process = false;
        }   

        if($process == true){
        	$user                     = User::create();
            $user->user_email         = $request->getParam('email');
            $user->user_first_name    = $request->getParam('firstname');
            $user->user_last_name     = $request->getParam('lastname');
            $user->user_password      = password_hash($request->getParam('password'), PASSWORD_DEFAULT);

            $user->save();
        }

        return $response->withRedirect($this->router->pathFor('products'));
    }


}