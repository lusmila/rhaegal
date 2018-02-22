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
                <h1>CATÁLOGO DE PRODUCTOS</h1>

            </div>
        </div>
    </div>
</section>
<!-- subheader close -->
<!-- section begin -->
<section id="section-blog">
    <div class="container">
        <div class="col-md-3">
           <div class="widget widget_category">
             <h4>SERIES</h4>
             <ul>
                 
                 @foreach($productos as $value)
                 <li>

                    <a href="{{route('catalogo.producto', $value->id)}}">
                        {{$value->str_producto}}


                    </a>
                </li>
                @endforeach
            </ul>
        </div>

    </div>
    <div class="col-md-9">

        @foreach( $serie as $product)

        <div class="col-sm-4">
            <!-- normal -->
            <div class="ih-item square effect3 bottom_to_top" style="box-shadow: none !important; border:0px !important; width: 250px !important; height: 230px !important"><a href="{{route('catalogo.informacion',$product->id)}}" target="_blank">
                <div class="img"><img src="{{$product->str_urlimage}}" alt="img" width="230" height="230"></div>
                <div class="info" style="height: 35px !important">
                    <p style="cursor: pointer;"><b onclick="window.open('{{$product->str_urlficha}}', '_blank')">Info |</b> <b style="cursor: pointer;" onclick="window.open('{{$product->str_urlguia}}', '_blank')">Sales guide</b></p>
                </div></a></div>
                <!-- end normal -->
                <center> <strong>{{$product->str_nombre}} </strong></center><br>
            </div>

            @endforeach

        </div>
    </section>




</body>
</html>
@endsection