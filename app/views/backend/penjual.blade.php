@extends('Template')
@section('title')
Master Penjual
@stop
@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Master Penjual</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Tabel Penjual
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No. Telfon</th>
                                        <th>No. Rekening</th>
                                        <th></th>
                                        <th></th>   
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $counter=1; ?>
                                    @foreach(penjual::all() as $data)
                                    <tr>
                                    <td>{{$counter; $counter++;}}</td>
                                    <td>{{$data->Nama}}</td>
                                    <td>{{$data->Email}}</td>
                                    <td>{{$data->hp}}</td>
                                    <td>{{$data->rekening}}</td>
                                    <th><a href="{{Route('ubah-penjual', $data->id)}}">Ubah</a></th>
                                    <th><a href="{{Route('delete-penjual', $data->id)}}">Hapus</a></th>
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
              <a href="{{Route('daftar-penjual')}}" type="submit" class="btn btn-lg btn-success btn-block">Tambah Pembeli</a  >
        </div>
        <!-- /#page-wrapper -->

           
    </div>

    <!-- /#wrapper -->
@stop