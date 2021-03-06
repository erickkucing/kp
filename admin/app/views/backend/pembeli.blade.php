@extends('Template')
@section('title')
Master Customer
@stop
@section('content')
<link href="{{Asset('vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{Asset('vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Master Customer</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Tabel Customer
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>No. Telfon</th>
                                        <th>Status</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $counter=1; ?>
                                    @foreach(pembeli::all() as $data)
                                    <tr>
                                    <td>{{$counter; $counter++;}}</td>
                                    <td>{{$data->Nama}}</td>
                                    <td>{{$data->Alamat}}</td>
                                    <td>{{$data->Email}}</td>
                                    <td>{{$data->hp}}</td>
                                    <td><?php 
                                    if($data->status==1){
                                        echo 'Aktif';
                                        $a="Nonaktifkan";
                                    }
                                    else {
                                        echo 'Nonaktif';
                                        $a="Aktifkan";
                                    }
                                    ?></td>
                                    <th><a href="{{Route('ubah-pembeli', $data->id)}}">Ubah</a></th>
                                    <th>
                                    <a href="{{Route('ubah-status', $data->id)}}"><?php echo $a; ?></a>
                                    </th>
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