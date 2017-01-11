@extends('Template')
@section('title')
Edit Produk
@stop
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Produk</h1>
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
                                            <input class="form-control" placeholder="Product Name" name="nama" value="{{$data->nama}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" placeholder="Description of Product">{{$data->deskripsi}}</textarea> 
                                        </div>
                                         <div class="form-group">
                                            <label>Stok</label>
                                            <input type="number" class="form-control" name="stok" placeholder="10" min="10" style="width:150px;" value="{{$data->stok}}">
                                        </div>
                                        <label>Sub Kategori </label>
                                            <select name="subkategori" value="{{$data->subkategori}}">
                                                @foreach(subkategori::all() as $dat)
                                                <option value="{{$dat->id}}" <?php
                                                    if($dat->id==$data->subkategori)
                                                        echo "selected";
                                                 ?> >{{$dat->nama}}</option>
                                                @endforeach
                                            </select>
                                            <br><br>
                                         <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" name="harga" placeholder="Rp." style="width:150px;" value="{{$data->harga}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Diskon</label>
                                            <input class="form-control" name="diskon" placeholder="%" style="width:80px;" value="{{$data->diskon}}">
                                        </div>
                                        <div>
                                        <fieldset>
                                       <!-- <input type="radio" name="check" value="false" checked> Tidak Ubah Gambar<br>
                                        <input type="radio" name="check" value="true"> Ubah Gambar<br>-->
                                        <div class="form-group">
                                            <label>Gambar</label><br>
                                            <img src="{{Asset('../../img/produk/').'/'.$data->foto}}" style="width:150px; height:150px;"> <a href="{{Route('delete-gambar', $data->id)}}">Delete</a><br><br>
                                            <input required type="file" name="fileToUpload" id="fileToUpload">
                                        </div>
                                        </fieldset>
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