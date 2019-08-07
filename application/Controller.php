<?php 

namespace Application;

use Slim\Http\Request;

class Controller
{
    
    public function __construct()
    {

    }

    public function bind(String $controller, Array $args = [])
    {
        // try {
            $path = explode('@', $controller);
            $controller = ucfirst($path[0]); 
            $function   = strtolower($path[1]); 

            // Type 3: Object method call
            $controllerPath = "\\Src\\Controllers\\$controller";
            $obj = new $controllerPath($this->app);

            return call_user_func([$obj, $function], 'three', 'four');

        // } catch (\Throwable $th) {

        // }

    }
}
