<?php

namespace Hackathon\Controllers;

class Controller{

	protected $view;

	public function __construct($container){

		$this->container = $container;
	}

}