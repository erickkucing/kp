<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FrontendController extends BaseController {

    public function showIndex() {
        return View::make("frontend.index");
    }
    //===================================/AJAX=============================================
}
