@extends('template.plantilla')

@section('contenido')
<style type="text/css">
	
	b:hover { 
    color: white;
}
</style>
<section id="subheader" data-stellar-background-ratio=".2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@if(isset($productos[0]))<h1>{{$productos[0]->serie->str_producto}} </h1> @endif

			</div>
		</div>
	</div>
</section>


<section id="section-blog">
	<div class="container">
		<div class="col-md-3">
			<div class="widget widget_category">
				<h4>SERIES</h4>
				<ul>
					<?php $url=Request::path(); $porciones = explode("/", $url);?>
					@foreach($serie as $value)
					<li>

						<a href="{{route('catalogo.producto', $value->id)}}">@if(isset($porciones[1])) @if($porciones[1]==$value->id)<strong>@endif @endif
							{{$value->str_producto}}

							@if(isset($porciones[1])) @if($porciones[1]==$value->id)</strong>@endif @endif
						</a>
					</li>
					@endforeach
				</ul>
			</div>

		</div>
		<div class="col-md-9">
			<div class="row">
				<div  id="buscador1" style=" margin-left: 70%;">
					<input type="search" id="buscar" style="width:230px;" data-token="{{ csrf_token() }}" name="autocompleted" class="form-control input-sm input-comparar" placeholder="Buscar..." />
					<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
					<input type="hidden" name="idproducto" value="@if(isset($productos[0])){{$productos[0]->idproducto}} @endif" id="idproducto">

				</div>
				<div class="col-md-3 col-md-offset"  id="busqueda" style=" margin-left: 66%;position:absolute;z-index: 2;">
				</div>
			</div>
			<div class="row">

				@foreach( $productos as $product)

				<div class="col-sm-4">
					<!-- normal -->
					<div class="ih-item square effect3 bottom_to_top" style="box-shadow: none !important; border:0px !important; width: 250px !important; height: 230px !important"><a href="{{route('catalogo.informacion',$product->id)}}" target="_blank">
						<div class="img"><img src="{{$product->str_urlimage}}" alt="img" width="230" height="230"></div>
						<div class="info" style="height: 35px !important;">
							<p style="cursor: pointer;"><b onclick="window.open('{{$product->str_urlficha}}', '_blank')">Info |</b> <b style="cursor: pointer;" onclick="window.open('{{$product->str_urlguia}}', '_blank')">Sales guide</b></p>
						</div></a></div>
						<!-- end normal -->
						<center> <strong>{{$product->str_nombre}} </strong></center><br>
					</div>

					@endforeach
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
							<ul class="pagination">
								<li>{!! $productos->render() !!}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	@endsection