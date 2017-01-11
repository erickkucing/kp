@extends('Frontend')
@section('title')
Semua Kategori
@stop
@section('content')
<!-- content -->
<div class="container">
<div class="women_main">
	<!-- start sidebar -->
	@foreach(kategori::all() as $data)

	<div style="width:250px; display:inline-block; margin-top:-20px; margin-right:20px; margin-bottom:40px;">
	  <div class="w_sidebar">
		<div class="w_nav1">
			<h4><a href="{{Route('kategori',$data->id.'/all')}}">{{$data->nama}}</a></h4>
			<ul>
			@foreach(subkategori::where('kategori',$data->id)->get() as $sub)
				<li><a href="{{Route('kategori',$data->id.'/'.$sub->id)}}">{{$sub->nama}}</a></li>
			@endforeach
			</ul>	
		</div>
	</div>
   </div>
	@endforeach
	<!-- end content -->
</div>
</div>
@stop