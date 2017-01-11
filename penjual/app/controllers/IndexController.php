<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class IndexController extends BaseController {

    public function showIndex() {
        return View::make("backend2.index");
    }

    public function showProduk() {
        return View::make("backend2.produk");
    }
    public function showRekap() {
        return View::make("backend2.rekap");
    }

    public function showTrans() {
        return View::make("backend2.transaksi");
    }
    public function showTransAll() {
        return View::make("backend2.transaksi-all");
    }
    public function showDaftarProduk() {
         if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->tambahProduk();
        }
        return View::make("backend2.daftarProduk");
    }
     public function tambahProduk(){
        $produk = new produk();
        $produk->penjual=Auth::user()->id;
        $produk->harga=Input::get('harga');
        $produk->nama=Input::get('nama');
        $produk->deskripsi=Input::get('deskripsi');
        $produk->diskon=Input::get('diskon');
        $produk->stok=Input::get('stok');
        $produk->subkategori=Input::get('subkategori');
        Image::make(Input::file('fileToUpload'))->save(public_path().'/../../img/produk/'.$_FILES['fileToUpload']['name']);
        $produk->foto=$_FILES['fileToUpload']['name'];
        $produk->save();
        return Redirect::Route('produk');
    }
    public function showUbahProduk($id) {
         if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->ubahProduk($id);
        }
        $produk=produk::find($id);
        return View::make("backend2.ubahProduk")->withData($produk);
    }
     public function ubahProduk($id){
        $produk = produk::find($id);
        $produk->harga=Input::get('harga');
        $produk->nama=Input::get('nama');
        $produk->deskripsi=Input::get('deskripsi');
        $produk->diskon=Input::get('diskon');
        $produk->stok=Input::get('stok');
        $produk->subkategori=Input::get('subkategori');
        Image::make(Input::file('fileToUpload'))->save(public_path().'/../../img/produk/'.$_FILES['fileToUpload']['name']);
        $produk->foto=$_FILES['fileToUpload']['name'];
        $produk->save();
        return Redirect::Route('produk');
    }
     public function deleteGambar($id){
        $produk = produk::find($id);
        //$path = public_path() . 'img/produk/' . $produk->foto;
        //$img = Image::make($path);
        //$img->destroy();
        $produk->foto='0.jpg';
        $produk->save();
        return Redirect::Route('ubah-produk',$produk->id);
    }








	public function showPembeli() {
        return View::make("backend.pembeli");
    }
    public function showPenjual() {
        return View::make("backend.penjual");
    }
    public function showKategori() {
        return View::make("backend.kategori");
    }
    public function showSubkategori() {
        return View::make("backend.subkategori");
    }
    public function showDaftarPenjual() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->tambahPenjual();
        }
        return View::make('backend.daftarPenjual');
    }
    public function showDaftarKategori() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->tambahKategori();
        }
        return View::make('backend.daftarKategori');
    }
    public function showDaftarSubkategori() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->tambahSubkategori();
        }
        return View::make('backend.daftarSubkategori');
    }
    public function showDaftarAdmin() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->tambahAdmin();
        }
        return View::make('backend.daftarAdmin');
    }

    public function showAdmin(){
    	return View::make("backend.admin");
    }

	public function ubahPenjual($id) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->RubahPenjual($id);
        }
        $penjual=penjual::find($id);
        return View::make('backend.ubahPenjual')->withData($penjual);
    }

    public function RubahPenjual($id){
    	$penjual =penjual::find($id);
        $penjual->Nama=Input::get('nama');
        $penjual->Email=Input::get('email');
        $penjual->hp=Input::get('hp');
        $penjual->rekening=Input::get('rekening');
        $penjual->save();
        return Redirect::Route('penjual');
    }
    public function ubahKategori($id) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->RubahKategori($id);
        }
        $kategori=kategori::find($id);
        return View::make('backend.ubahKategori')->withData($kategori);
    }
     public function RubahKategori($id){
        $penjual =kategori::find($id);
        $penjual->nama=Input::get('nama');
        $penjual->save();
        return Redirect::Route('kategori');
    }
    public function ubahSubkategori($id) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->RubahSubkategori($id);
        }
        $subkategori=subkategori::find($id);
        return View::make('backend.ubahSubkategori')->withData($subkategori);
    }
     public function RubahSubkategori($id){
        $subkategori =subkategori::find($id);
        $subkategori->nama=Input::get('nama');
        $subkategori->kategori=Input::get('kategori');
        $subkategori->save();
        return Redirect::Route('subkategori');
    }    

        public function ubahAdmin($id) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->RubahAdmin($id);
        }
        $dat=User::find($id);
        return View::make('backend.ubahAdmin')->withData($dat);
    }

    public function RubahAdmin($id){
    	$admin =User::find($id);
        $admin->nama=Input::get('nama');
        $admin->email=Input::get('email');
        $admin->rekening=Input::get('rekening');
        $admin->save();
        return Redirect::Route('admin');
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

    public function tambahAdmin(){
        $admin = new User();
        $admin->nama=Input::get('nama');
        $admin->email=Input::get('email');
        $admin->rekening=Input::get('rekening');
        $admin->password=Hash::make(Input::get('password'));
        $admin->save();
        return Redirect::Route('admin');
    }
     public function tambahKategori(){
        $kategori = new kategori();
        $kategori->nama=Input::get('nama');
        $kategori->save();
        return Redirect::Route('kategori');
    }
    public function tambahSubkategori(){
        $kategori = new subkategori();
        $kategori->nama=Input::get('nama');
        $kategori->kategori=Input::get('kategori');
        $kategori->save();
        return Redirect::Route('subkategori');
    }
    public function deleteSubkategori($id){
        $kategori = subkategori::where('id',$id)->delete();
       return Redirect::Route('subkategori');
    }
    public function deletekategori($id){
        if(subkategori::where('kategori',$id)->count()<=0){
            $kategori = kategori::where('id',$id)->delete();
            return Redirect::Route('kategori');
        }
        else {
             return Redirect::Route('kategori')->with('message', 'gagal');
        }
           
    }

    //===================================/AJAX=============================================
}
