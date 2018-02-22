@extends('template.plantilla')

@section('contenido')


<section style="padding: 50px !important; background: black">
</section>
@foreach($ficha as $value)
<img src="{{$value->str_url}}" style="width: 100%;" alt="img">
@endforeach 

<!-- empieza carousel-->
@if(isset($carousel))
<div class='row' style="background: {{$carousel[0]->str_fondo}}">
	
	<div class='col-md-12' id="cambio_color">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner">
				<?php $i=0; ?>
				@foreach ($carousel as $pr)
				<div class="item @if($i==0) active @endif">
				<?php $redimencion=explode(".", $pr->str_url);
				?>
					<center><img alt="img" src="{{$pr->str_url}}" @if(isset($redimencion)) @if($redimencion[2]!='png') style="width:80%;" @endif @endif></center>
				</div>
				<?php $i++; ?>
				@endforeach
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="fa fa-chevron-left" style="margin-top:100%"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="fa fa-chevron-right" style="margin-top:100%"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	<center><br>
		<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
		<ul style="text-align:center;">
			@foreach ($color as $valor)
			<li style="display: inline-block;">
				<div style="margin: 10px; border-bottom: 3px solid {{$valor->str_color}}; color:#7b7b7b; font-size: 22px; cursor: pointer" onclick="cambio_color('{{$valor->str_color}}', {{$valor->idequipo}})">{{$valor->str_nombre}}&nbsp; </div>
			</li>
			@endforeach
		</ul>
	</center>
</div>
@endif
<!--final carrusel -->
@endsection