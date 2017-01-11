@extends('Template')
@section('title')
Daftar Penjual
@stop
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Penjual</h1>
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
                                    <form role="form" method="post" >
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" placeholder="John Smith" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="6 Characters">
                                        </div>
                                         <div class="form-group">
                                            <label>Alamat Email</label>
                                            <input class="form-control" name="email" placeholder="ana@gmail.com">
                                        </div>
                                         <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input class="form-control" name="hp" placeholder="ana@gmail.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Rekening</label>
                                            <input class="form-control" name="rekening" placeholder="">
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