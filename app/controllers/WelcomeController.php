<?php

namespace app\controllers;

use Flight;

class WelcomeController {

	public function __construct() {

	}


	public function home() {
        $data = ['name' => 'Jean'];
        Flight::render('welcome', $data);
    }
}