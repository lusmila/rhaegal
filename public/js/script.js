$(document).ready(function() 
{ 
    $.fn.delayPasteKeyUp = function(fn, ms) 
    { 
        var timer = 0; 
        $(this).on("keyup paste", function() 
        { 
            clearTimeout(timer); 
            timer = setTimeout(fn, ms); 
        }); 
    }; 

    $("input[name=autocompleted]").keyup(function() 
    { 
        var token=$('#token').val(); 

        $.ajax({
            type: 'POST',
                url: "/buscador",//aqui tu ruta
                dataType: 'json',//
                data: "autocomplete="+$("input[name=autocompleted]").val()+"&idproducto="+$("#idproducto").val(),
                headers:{'X-CSRF-TOKEN': token},
            })
        .done(function(data) {
               //console.log(data);
               if(data)
               {
                html = '<div class="list-group">';
                if(data.length>0)
                {
                    for(datos in data)
                    {
                        html+='<a href="'+data[datos].str_urlficha+'" target="_blank" class="list-group-item" align="left" style="width:79%">';
                        html+='<div class="row"><div class="col-md-3"> <img src="'+data[datos].str_urlimage+'"  height="60px" width="40"></div><div class="col-md-9"> <span style="font-size:12;" align="center"> ' + data[datos].str_nombre;
                        html+='</span></div></div></a>';
                    }
                }
                else
                {
                    html+='<a href="#" class="list-group-item" style="width:79%">';
                    html+='<span style="font-size:10px;">No se han encontrado resultado </span>';
                    html+='</a>';
                }
                html+='</div>';
                $("#busqueda").css("display","block");
                $("#busqueda").html("").append(html);
                
            }
        })
        .fail(function(data) {
           console.log(data);
       }); 
    }); 

    $(document).on("click", "a", function() 
    { 
        $("a").removeClass("active"); 
        $(this).addClass("active"); 
    }) 

}); 

$('#buscar').keyup(function() {

    if ($("#buscar").val()=='') {

     $("#busqueda").css("display","none");

 } 
});
function redireccionar() {
   var variable=document.getElementById("combo").value;
   location.href = variable;
}
function redireccion($valor) {

   location.href = $valor;
}
////////////////cambiar color/////////////////////////////
function cambio_color(valor, id){
    var token=$('#token').val();
    $.ajax({
        type: 'POST',
                url: "/cambio_color",//aqui tu ruta
                dataType: 'json',//
                data: "id="+id+"&color="+valor,
                headers:{'X-CSRF-TOKEN': token},
            })
    .done(function(data) {
       
    
    html='<div id="myCarousel" class="carousel slide" data-ride="carousel">';
    html+='<div class="carousel-inner">';
        var i=0; var j='';
        for(datos in data){
        if(i==0){
            j='active';
        }else{
            j='';
        }
        html+='<div class="item '+j+'">'
        html+='<center><img src="'+data[datos].str_url+'" style="width:80%;"></center>'
        html+='</div>'
        i=1+i;
        
    }
        html+='</div>';
        html+='<a class="left carousel-control" href="#myCarousel" data-slide="prev">';
        html+='<span class="fa fa-chevron-left" style="margin-top:100%"></span>';
        html+='<span class="sr-only">Previous</span>';
        html+='</a>';
        html+='<a class="right carousel-control" href="#myCarousel" data-slide="next">';
        html+='<span class="fa fa-chevron-right" style="margin-top:100%"></span>';
        html+='<span class="sr-only">Next</span>';
        html+='</a>';
        html+='</div>';





    $("#cambio_color").html("").append(html);
    
})
    .fail(function(data) {
       alert(data);
   }); 
} 
