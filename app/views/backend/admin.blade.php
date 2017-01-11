@extends('Template')
@section('title')
Master Admin
@stop
@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Master Admin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Tabel Admin
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No. Rekening</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $counter=1; ?>
                                    @foreach(User::all() as $data)
                                    <tr>
                                    <td>{{$counter; $counter++;}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->rekening}}</td>
                                    <td><a href="{{Route('ubah-admin', $data->id)}}">Ubah</a></td>
                                    <th><a href="{{Route('delete-admin', $data->id)}}">Hapus</a></th>
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
              <a href="{{Route('daftar-admin')}}" type="submit" class="btn btn-lg btn-success btn-block">Tambah Admin</a  >
        </div>
        <!-- /#page-wrapper -->

           
    </div>

    <!-- /#wrapper -->
@stop