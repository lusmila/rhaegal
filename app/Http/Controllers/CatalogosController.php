<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Catalogo;
use App\Models\Ficha;
use App\Models\Carrusel;
class CatalogosController extends Controller
{
	public function index(){
		$productos=Producto::where('bol_eliminado','=',0)->select('id','str_producto')->orderby('str_producto','asc')->get();
		$serie=Catalogo::orderby('created_at','desc')->limit(9)->get();
		
		return view('catalogo/index', compact('productos','serie'));
	}

	public function producto($id=null){
		$productos=Catalogo::where('idproducto','=',$id)->where('bol_eliminado','=',0)->orderby('id','desc')->paginate(9);
		$serie=Producto::where('bol_eliminado','=',0)->select('id','str_producto')->orderby('str_producto','asc')->get();
		return view('catalogo/producto', compact('productos','serie'));
	}


	public function buscador(Request $request)
	{

		$search   = $request->input('autocomplete');
		$id   = $request->input('idproducto');
		$sql = Catalogo::where("str_nombre", 'LIKE', '%' . $search . '%')->where('bol_eliminado','=',0)->where('idproducto', '=', $id)->limit(5)->get();
		if(empty($search)){
			$sql="";
		}
		return response()->json($sql);

	}

	public function informacion($id=null){
		$ficha=Ficha::where('idserie','=',$id)->orderby('id','desc')->get();
		$color=Carrusel::where('idequipo','=',$id)->groupby('str_color')->get();
		if(isset($color[0])){
		$carousel=Carrusel::where('idequipo','=',$id)->where('str_color','=',$color[0]->str_color)->get();
		}
		return view('catalogo/principal', compact('ficha','carousel','color'));
	}

	public function color(Request $request){

		$carousel=Carrusel::where('idequipo','=',$request->input('id'))->where('str_color','=',$request->input('color'))->get();
		return response()->json($carousel);
	}



}
