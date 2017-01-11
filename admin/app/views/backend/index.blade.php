@extends('Template')
@section('title')
Home
@stop
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome, {{Auth::user()->nama;}}</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Pesan Baru!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{Route('penjual')}}">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{penjual::all()->count();}}</div>
                                    <div>Total Penjual</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
                <a href="{{Route('pembeli')}}">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{pembeli::all()->count();}}</div>
                                    <div>Barang Terjual</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
                <a href="{{Route('produk')}}">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tags fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{produk::all()->count();}}</div>
                                    <div>Total Produk</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pesan Baru
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Time Received</th>
                                        <th>Title</th>
                                        <th>Sender Type</th>
                                        <th>Sender</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $counter=1; ?>
                                    <!-- @foreach(pembeli::all() as $data) -->
                                    <a href="#">
                                    <tr>
                                    <td>{{$counter; $counter++;}}</td>
                                    <td><!-- {{$data->Nama}}-->07.00</td>
                                    <td><!-- {{$data->Alamat}}-->Confirmation</td>
                                    <td><!-- {{$data->Email}}-->Customer</td>
                                    <td><!-- {{$data->hp}}-->Erick Kresnamurti</td>
                                    <th><a href="#">Lihat</a></th>
                                    </tr>
                                    </a>
                                   <!-- @endforeach -->
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pesan Telah dibaca
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Time Received</th>
                                        <th>Title</th>
                                        <th>Sender Type</th>
                                        <th>Sender</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $counter=1; ?>
                                    <!-- @foreach(pembeli::all() as $data) -->
                                    <a href="#">
                                    <tr>
                                    <td>{{$counter; $counter++;}}</td>
                                    <td><!-- {{$data->Nama}}-->07.00</td>
                                    <td><!-- {{$data->Alamat}}-->Confirmation</td>
                                    <td><!-- {{$data->Email}}-->Customer</td>
                                    <td><!-- {{$data->hp}}-->Erick Kresnamurti</td>
                                    <th><a href="#">Lihat</a></th>
                                    </tr>
                                    </a>
                                   <!-- @endforeach -->
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
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@stop
