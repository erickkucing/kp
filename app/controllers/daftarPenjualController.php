<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class daftarPenjualController extends BaseController {

    public function submit() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            echo("aaa");exit();
            return $this->tambahPenjual();
        }
        return View::make('backend.daftarPenjual');
    }

    public function tambahPenjual(){
        $penjual = new penjual();
        $penjual->Nama=Input::get('nama');
        $penjual->Email=Input::get('email');
        $penjual->hp=Input::get('hp');
        $penjual->rekening=Input::get('rekening');
        $penjual->password=Hash::make(Input::get('password'));
        $penjual->save();
        return Redirect::Route('penjual');
    }

    //===================================/AJAX=============================================
}
