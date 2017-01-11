@extends('Template')
@section('title')
Transaksi
@stop
@section('content')
<link href="{{Asset('vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{Asset('vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Transaksi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Transaksi Baru
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form method="post" action="{{Route('produk')}}">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Nama Produk</th>
                                        <th>Sub Kategori</th>
                                        <th>Kategori</th>
                                        <th>Pembeli</th>
                                        <th>Jumlah</th>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $counter=1; ?>
                                    @foreach(produk::all() as $data)
                                    <tr>
                                    <td>{{$counter; $counter++;}}</td>
                                    <th></th>
                                    <td>{{$data->nama}}</td>
                                    <td>{{subkategori::find($data->subkategori)->nama}}</td>
                                    <td>{{kategori::find(subkategori::find($data->subkategori)->kategori)->nama}}</td>
                                    <td><a href="#">{{penjual::find($data->penjual)->Nama}}</a></td>
                                    <td>{{$data->diskon}}</td>
                                    <td><a href="">Tandai Dibaca</a></td>
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
@stop