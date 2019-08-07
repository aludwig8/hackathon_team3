<?php 

namespace Src\Models;

use Model;
use ORM;

class Test extends Model {

    function __construct()
    {
        dd(new ORM);
    }
}