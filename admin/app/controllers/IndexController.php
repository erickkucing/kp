<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class IndexController extends BaseController {

    public function showIndex() {
        return View::make("backend.index");
    }
	public function showPembeli() {
        return View::make("backend.pembeli");
    }
    public function showProduk() {
        return View::make("backend.produk");
    }
    public function showGambar() {
        return View::make("backend.gambar");
    }
    public function showProdukFilter() {
        $kategori =Input::get('kategori');

        return View::make("backend.produk")->withData($kategori);
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
    public function showDaftarGambar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->tambahGambar();
        }
        return View::make('backend.daftarGambar');
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
    public function ubahPembeli($id) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $this->RubahPembeli($id);
        }
        $pembeli=pembeli::find($id);
        return View::make('backend.ubahPembeli')->withData($pembeli);
    }

    public function RubahPembeli($id){
        $pembeli =pembeli::find($id);
        $pembeli->Nama=Input::get('nama');
        $pembeli->Email=Input::get('email');
        $pembeli->hp=Input::get('hp');
        $pembeli->alamat=Input::get('alamat');
        $pembeli->status=Input::get('status');
        $pembeli->save();
        return Redirect::Route('pembeli');
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
    public function ubahStatusCust($id){
        $pembeli =pembeli::find($id);
        if($pembeli->status=='0'){
            $pembeli->status='1';
        }
        else
         $pembeli->status='0';   

        $pembeli->save();
        return Redirect::Route('pembeli');
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
    public function tambahGambar(){
        $gambar = new gambar();
        $gambar->title=Input::get('title');
        $gambar->link=Input::get('link');
        $image=Image::make(Input::file('fileToUpload'))->save(public_path().'/../../img/gambarIndex/'.$_FILES['fileToUpload']['name']);
        $gambar->gambar=$_FILES['fileToUpload']['name'];
        $image->fit(272, 370);
        $gambar->save();
        return Redirect::Route('gambar');
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
    public function deleteGambar($id){
        $gambar = gambar::where('id',$id)->delete();
       return Redirect::Route('gambar');
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
    public function deleteAdmin($id){
        $admin = User::where('id',$id)->delete();
       return Redirect::Route('admin');
    }
    public function deletePenjual($id){
        $penjual = penjual::where('id',$id)->delete();
       return Redirect::Route('penjual');
    }
    //===================================/AJAX=============================================
}
