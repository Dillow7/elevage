<?php

namespace app\controllers;

use app\models\ProductModel;

use Flight;

class LoginController
{
    public function __construct() {}

    public function showLoginForm() {
        Flight::render('login');
    }

    public function processLogin() {
        $email = Flight::request()->data->email;
        $mdp = Flight::request()->data->password;
        $users = Flight::login()->login();
        foreach ($users as $user) {
            if ($user['email'] === $email && $user['mot_de_passe'] === $mdp) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_nom'] = $user['nom'];
                $_SESSION['user_email'] = $user['email'];
                $id = $_SESSION['user_id'];
                Flight::render('home', ['success' => 'Connexion réussie','id'=>$_SESSION['user_id']]);
                return;
            }
        }
        Flight::render('login', ['error' => 'Email ou mot de passe incorrect.']);

    }

    public function login() {
        Flight::render('login');
    }

   
    
}
