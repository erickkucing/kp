@extends('Frontend')
@section('title')
Products
@stop
@section('content')
<!-- content -->
<div class="container">
<div class="women_main">
	<!-- start sidebar -->
	<div class="col-md-3 s-d">
	  <div class="w_sidebar">
		<div class="w_nav1">
			<h4><a href="{{Route('kategori',$data.'/all')}}">All</a></h4>
			<ul>
			@foreach(subkategori::where('kategori',$data)->get() as $sub)
				<li><a href="{{Route('kategori',$data.'/'.$sub->id)}}">{{$sub->nama}}</a></li>
			@endforeach
			</ul>	
		</div>
	</div>
   </div>
	<!-- start content -->
	<div class="col-md-9 w_content">
		<div class="women">
			<a href="#"><h4>Enthecwear - <span>4449 itemms</span> </h4></a>
			<ul class="w_nav">
						<li>Sort : </li>
		     			<li><a class="active" href="#">popular</a></li> |
		     			<li><a href="#">new </a></li> |
		     			<li><a href="#">discount</a></li> |
		     			<li><a href="#">price: Low High </a></li> 
		     			<div class="clear"></div>	
		     </ul>
		     <div class="clearfix"></div>	
		</div>
		<!-- grids_of_4 -->
		<?php $counter = 1;?>
		<div class="grids_of_4">
		  	@foreach($produk as $p)
		  	@if($counter%4 == 1 && $counter != 1)
			<div class="clearfix"></div>
			</div>
		  	<div class="grids_of_4">
			@endif
		  	<div class="grid1_of_4">
				<div class="content_box"><a href="{{Route('details',$p->id)}}">
			   	   	 <img src="{{Asset('/../img/produk/').'/'.$p->foto}}" style="height:163px; width:191px;" class="img-responsive" alt=""/>
				   	  </a>
				    <h4><a href="details.html">{{substr($p->nama,0,18)}}</a></h4>
				     <p>{{substr($p->deskripsi,0,20)}}</p>
					 <div class="grid_1 simpleCart_shelfItem">
				    
					 <div class="item_add"><span class="item_price"><h6>Rp. {{$p->harga}}</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					 </div>
			   	</div>
			</div>
			<?php $counter++;?>
			@endforeach
	    <div class="clearfix"></div>
		</div>
		
		
	</div>
	<div class="clearfix"></div>
	
	<!-- end content -->
</div>
</div>
@stop