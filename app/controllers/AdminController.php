<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdminController extends BaseController {

    public function showLogin() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->adminLogin();
        }
        return View::make('backend.login');
    }

    public function adminLogin(){
        $email = Input::get('email');
        $password = Input::get('password');
        if(Auth::attempt(array('email'=> $email, 'password' => $password), true)){
            return Redirect::intended('home');
        }
        return View::make('backend.login');
    }

    //===================================/AJAX=============================================
}
