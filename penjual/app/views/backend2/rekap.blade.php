@extends('Template')
@section('title')
Rekap Penjualan
@stop
@section('content')
<link href="{{Asset('vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{Asset('vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Rekap Penjualan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar produk terjual 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Rank</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Sub Kategori</th>
                                        <th>Jumlah Penjualan</th>
                                        <th>Harga</th>
                                        <th>Diskon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $counter=1; ?>
                                    @foreach(produk::all() as $data)
                                    <tr>
                                    <td>{{$counter; $counter++;}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{kategori::find(subkategori::find($data->subkategori)->kategori)->nama}}</td>
                                    <td>{{subkategori::find($data->subkategori)->nama}}</td>
                                    <td>{{penjual::find($data->penjual)->Nama}}</td>
                                    <td>{{$data->harga}}</td>
                                    <td>{{$data->diskon}}</td>
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
@stop