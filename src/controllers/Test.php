<?php

namespace Src\Controllers;

use Slim\Http\Request;

class Test
{

    public function __construct()
    {

    }

    public function test()
    {
        return $this->app->view->render($response, 'index.php', [
            'name' => 'test ',
        ]);
    }
}
