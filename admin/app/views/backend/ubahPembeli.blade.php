@extends('Template')
@section('title')
Edit Customer
@stop
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ubah Data Customer</h1>
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
                                            <input class="form-control" placeholder="John Smith" name="nama" value="{{$data->Nama}}">
                                        </div>
                                         <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" placeholder="ana@gmail.com"  value="{{$data->Alamat}}">
                                        </div>
                                         <div class="form-group">
                                            <label>Alamat Email</label>
                                            <input class="form-control" name="email" placeholder="ana@gmail.com"  value="{{$data->Email}}">
                                        </div>
                                         <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input class="form-control" name="hp" placeholder="ana@gmail.com"  value="{{$data->hp}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                             <select name="status">
                                             <?php 
                                            if($data->status==1){
                                                  echo "<option value='1' selected>Aktif</option>";
                                                   echo "<option value='0' >Nonaktif</option>"; 
                                            }
                                            else {
                                                 echo "<option value='1' >Aktif</option>";
                                                 echo "<option value='0' selected >Nonaktif</option>";  
                                            }    
                                            ?>
                                            </select>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
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