@extends('Frontend')
@section('title')
Home
@stop
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
<div class="arriv">
	<div class="container">
		<div class="arriv-las">
		 <div class="carousel-inner" role="listbox">
		 <div class="item active">
		 <?php $counter=1;?>
		 @foreach(gambar::all() as $gambar)
				 	<div class="col-md-4 arriv-left2">
						<img src="{{Asset('/../img/gambarIndex/').'/'.$gambar->gambar}}" style="height:272px; width:370px;" class="img-responsive" alt="">
						<div class="arriv-info2">
							<a href="{{$gambar->link}}"><h3>{{$gambar->title}}<i class="ars"></i></h3></a>
						</div>
					</div>
		 		@if($counter == gambar::count())
		 		</div>
		 		@elseif($counter%3==0)
		 		</div>
		 		<div class="item">
		 		@endif

					<?php $counter++;?>
				@endforeach
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
	</div>
</div>
<div class="special">
	<div class="container">
		<h3>New Products</h3>
		<div class="specia-top">
			<ul class="grid_2">
                            @foreach(produk::orderBy('id', 'desc')->take(4)->get() as $data)
		<li>
				<a href="#"><img src="{{Asset('/../img/produk/'.$data->foto)}}" style="height:300px; " class="img-responsive" alt=""></a>
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h5>{{$data->nama}}</h5>
					<div class="item_add"><span class="item_price"><h6>Rp. {{$data->harga}}</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
				</div>
		</li>
                @endforeach
		<div class="clearfix"> </div>
	</ul>
		</div>
	</div>
</div>
@stop
