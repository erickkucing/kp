@extends('Template')
@section('title')
Master Kategori
@stop
@section('content')
<link href="{{Asset('vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{Asset('vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
        <div id="page-wrapper">
        @if(Session::has('message'))
        <br>
        <div class="alert alert-danger" fade in>
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Warning!</strong> Kategori Masih Terpakai
        </div>
        @endif
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Master Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Kategori
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter=1; ?>
                                    @foreach(kategori::all() as $data)
                                    <tr>
                                    <td>{{$counter; $counter++;}}</td>
                                    <td>{{$data->nama}}</td>
                                    <th><a href="{{Route('ubah-kategori', $data->id)}}">Ubah</a></th>
                                    <th><a href="{{Route('delete-kategori', $data->id)}}">Hapus</a></th>
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
              <a href="{{Route('daftar-kategori')}}" type="submit" class="btn btn-lg btn-success btn-block">Tambah Kategori</a  >
        </div>
        <!-- /#page-wrapper -->

           
    </div>

    <!-- /#wrapper -->
    <!-- DataTables JavaScript -->
    <script src="{{Asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{Asset('vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{Asset('vendor/datatables-responsive/dataTables.responsive.js')}}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script src="{{Asset('dist/js/sb-admin-2.js')}}"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    <!-- Custom Theme JavaScript -->
    
    <!-- /#wrapper -->
@stop