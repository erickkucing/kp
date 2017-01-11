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

    public function showAllKategori() {
        return View::make("frontend.allkategori");
    }

    public function showLogin() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (Input::get('jenis') == 'register') {
                return $this->tambahPembeli();
            }
            if (Input::get('jenis') == 'login') {
                return $this->Login();
            }
        }
        return View::make("frontend.register");
    }

    public function Login() {
        $email = Input::get('email');
        $password = Input::get('password');
        if (Auth::attempt(array('email' => $email, 'password' => $password), true)) {
            return Redirect::intended('home');
        }
        return View::make('frontend.register');
    }

    public function showCheckout() {
        return View::make("frontend.checkout");
    }

    public function showDetails($id) {
        return View::make("frontend.details")->withData(produk::find($id));
    }

    public function showKategori($id, $subkategori) {
        if ($subkategori == 'all') {
            $dataproduk = produk::join('subkategori', 'subkategori', '=', 'subkategori.id')->where('kategori', $id)->select('produk.*')->get();
        } else {
            $dataproduk = produk::where('subkategori', $subkategori)->get();
        }
        return View::make("frontend.kategori")->withData($id)->withSub($subkategori)->withProduk($dataproduk);
    }

    public function tambahPembeli() {
        $penjual = new pembeli();
        $penjual->Nama = Input::get('nama');
        $penjual->Email = Input::get('email');
        $penjual->hp = Input::get('hp');
        $penjual->Alamat = Input::get('alamat');
        $penjual->password = Hash::make(Input::get('password'));
        $penjual->save();
        return Redirect::Route('home');
    }

    //===================================/AJAX=============================================
}
