<?php

namespace Hackathon\Controllers;

use Hackathon\Models\UserModel;
use Hackathon\Models\RoleModel;
use Slim\Views\Twig as View;

/**
 * 
 */
class OrderController extends Controller
{
	function index($request, $response)
	{

		//GET + 
		$articles = RoleModel::find_many();
		//var_dump($articles);
		//GET -

		//INSERT + 
		/*$article 			= RoleModel::create();
		$article->role_name 	= 'Test Role';$app->request()->post('content');
		$article->save();
		echo "Done!";*/
		//INSERT -
		//die();

		return $this->container->view->render($response, 'home.twig', ["article"=>$articles]);
	}
}