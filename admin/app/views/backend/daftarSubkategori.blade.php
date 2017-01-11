@extends('Template')
@section('title')
Tambah Sub Kategori
@stop
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Sub Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <?php if(isset($kategori)){
                echo 'a';
                }?>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Forms
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" >
                                        <div class="form-group">
                                            <label>Kategori </label>
                                            <select name="kategori">
                                                @foreach(kategori::all() as $data)
                                                <option value="{{$data->id}}" >{{$data->nama}}</option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <br>
                                            <label>Nama Sub Kategori</label>
                                            <input class="form-control" placeholder="t-shirts, etc." name="nama">
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