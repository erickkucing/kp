@extends('Template')
@section('title')
Tambah Produk
@stop
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Produk</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Forms
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nama Produk</label>
                                            <input class="form-control" placeholder="Product Name" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" placeholder="Description of Product"></textarea> 
                                        </div>
                                         <div class="form-group">
                                            <label>Stok</label>
                                            <input type="number" class="form-control" name="stok" placeholder="10" min="10" style="width:150px;">
                                        </div>
                                        <label>Sub Kategori </label>
                                            <select name="subkategori">
                                                @foreach(subkategori::all() as $data)
                                                <option value="{{$data->id}}" >{{$data->nama}}</option>
                                                @endforeach
                                            </select>
                                            <br><br>
                                         <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" name="harga" placeholder="Rp." style="width:150px;">
                                        </div>
                                        <div class="form-group">
                                            <label>Diskon</label>
                                            <input class="form-control" name="diskon" placeholder="%" style="width:80px;">
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input required type="file" name="fileToUpload" id="fileToUpload">
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@stop