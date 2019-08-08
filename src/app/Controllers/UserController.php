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

        $user = User::where('user_email', $request->getParam('email'))->find_one();

        if( $user != null){
            if(password_verify($request->getParam('password'), $user->user_password)){
                session_start();
                $_SESSION['user']['email'] = $user->user_email;
                $_SESSION['user']['name'] = $user->user_first_name;
                $_SESSION['user']['id'] = $user->user_id;

                return $response->withRedirect($this->router->pathFor('products'));

            }else{

                //retunr view error
                return $this->container->view->render($response, 'login.twig', [
                    "message" => "Wrong Email or Password!"
                ]);
            }
        }
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
          $message = "$email is not a valid email address";
          $process = false;
        }

        if(($request->getParam('email')==""||
            $request->getParam('firstname') ==""||
            $request->getParam('lastname') == "" || 
            $request->getParam('email') == ""
        )&& $process == true){
            $message = "Fields should be left empty!";
            $process = false;
        }

        $user_email = User::where('user_email', $email)->find_one();

        if($user_email != NULL){
            if($user_email->user_email == $email && $process == true){
                $message = "$email alerady exists!";
                $process = false;
            }
        }
        
        if($process == true){
        	$user                     = User::create();
            $user->user_email         = $request->getParam('email');
            $user->user_first_name    = $request->getParam('firstname');
            $user->user_last_name     = $request->getParam('lastname');
            $user->user_password      = password_hash($request->getParam('password'), PASSWORD_DEFAULT);

            $user->save();
        }else{
            return $this->container->view->render($response, 'signup.twig', [
                "message" => $message
            ]);
        }

        return $response->withRedirect($this->router->pathFor('products'));
    }


    public function logout($request,$response){
        
        session_destroy();

        return $response->withRedirect($this->router->pathFor('products'));

    }

}