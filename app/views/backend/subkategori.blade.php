@extends('Template')
@section('title')
Master Sub Kategori
@stop
@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Master Sub Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Subkategori
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Sub Kategori</th>
                                        <th>Kategori</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter=1; ?>
                                    @foreach(subkategori::all() as $data)
                                    <tr>
                                    <td>{{$counter; $counter++;}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{kategori::find($data->kategori)->nama}}</td>
                                    <th><a href="{{Route('ubah-subkategori', $data->id)}}">Ubah</a></th>
                                    <th><a href="{{Route('delete-subkategori', $data->id)}}">Hapus</a></th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
             
                        </div>
                        <!-- /.panel-body -->
                    </div>

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
              <!-- /.row -->
              <a href="{{Route('daftar-subkategori')}}" type="submit" class="btn btn-lg btn-success btn-block">Tambah Sub Kategori</a  >
        </div>
        <!-- /#page-wrapper -->

           
    </div>

    <!-- /#wrapper -->
@stop