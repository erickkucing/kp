@extends('Frontend')
@section('title')
Product Details
@stop
@section('content')
<!-- content -->
<div class="container">
    <div class="women_main">
        <!-- start content -->
        <div class="row single">
            <div class="col-md-9 det">
                <div class="single_left">
                    <div class="grid images_3_of_2">
                        <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image" src="{{Asset('/../img/produk/'.$data->foto)}}" style="height:300px;" class="img-responsive" />
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>		
                    </div>
                    <div class="desc1 span_3_of_2">
                        <h3>{{$data->nama}}</h3>
                        <span class="brand">Kategori : {{subkategori::find($data->subkategori)->nama}} {{kategori::find(subkategori::find($data->subkategori)->kategori)->nama}}</a></span>
                        <br>
                        <span class="code">Penjual : {{penjual::find($data->penjual)->Nama}}</span>
                        <p>{{$data->deskripsi}}</p>
                        <div class="price">
                            <?php 
                            $p=$data->harga;
                            $d=$data->diskon;
                            $e=$d/100;
                            $diskon=$p*$e;
                            $harga=$p-$diskon;
                            ?>
                            <span class="text">Price:</span>
                            <span class="price-new"> Rp. {{$harga}}</span><span class="price-old"> Rp. {{$data->harga}}</span> 
                            <span class="price-tax">Diskon: {{$data->diskon}}%</span><br>
                            <span class="points"><small>Anda hemat: Rp. {{$diskon}}</small></span><br>
                        </div>
                        <div class="btn_form">
                            <a href="checkout.html">buy</a>
                        </div>

               
            <div class="clearfix"></div>		
        </div>
        <!-- end content -->
    </div>
</div>
@stop