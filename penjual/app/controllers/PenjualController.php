<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PenjualController extends BaseController {

    public function showLogin() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->userLogin();
        }
        return View::make('backend.login');
    }

    //===================================/AJAX=============================================
}
