<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserController extends BaseController {

    public function showLogin() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->userLogin();
        }
        return View::make('backend2.login');
    }

    public function userLogin(){
        $email = Input::get('email');
        $password = Input::get('password');
        if(Auth::attempt(array('email'=> $email, 'password' => $password), true)){
            return Redirect::intended('home');
        }
        return View::make('backend2.login');
    }

    //===================================/AJAX=============================================
}
