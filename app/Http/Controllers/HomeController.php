<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Banner;
use App\Models\Contenido;
use App\Models\Producto;
use App\Models\Catalogo;
use App\Models\Paises;
use App\Models\Contador;
use App\Models\Correo;

class HomeController extends Controller
{
	public function index(){
    	////////////////capturar pais //////////////////////
		include("geoiploc.php"); 
		$ip =$_SERVER['REMOTE_ADDR'];

		if(empty($ip) or $ip=='::1'){
			$ip="186.67.240.137";
		}
		$pais=getCountryFromIP($ip, " NamE ");
		$contador=Contador::where('ip','=',$ip)->where('fecha','=',date("Y-m-d"))->get();
		if(count($contador)<1){
			$cuenta = New Contador();
			$cuenta->cantidad=1;
			$cuenta->fecha=date(now());
			$cuenta->ip=$ip;
			$cuenta->save();
		}
		$paises=Paises::all();
		//$banner=Banner::where('bol_eliminado','=',0)->select('id','str_titulo')->get();
		$contenido=Contenido::where('bol_eliminado','=',0)->select('id','str_titulo','str_descripcion')->get();
		$productos=Catalogo::orderby('created_at','desc')->select('id','str_urlimage','str_nombre')->limit(9)->get();
		return view('home/index', compact('banner','contenido','productos','pais','paises'));
	}

	public function correo(Request $request){

		$this->validate($request, [
			'name' => 'required',
			'email' => 'required',
			'telefono' => 'required',
			'pais' => 'required',
			'empresa' => 'required',
			'message' => 'required',
			'g-recaptcha-response'=>'required'
			]);

		$message = '<table border="1" bordercolor="#333" bgcolor="#FFF" width="650" align="center" style="font-family:Verdana, Geneva, sans-serif;">';
		$message.= '<tr><th colspan="2" style="color:#84BD23">Mensaje de Contacto</th></tr>';

	// $name
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >NOMBRE</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">'. $request->input('name') .'</td>';
		$message.='</tr>';

	// $email
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >EMAIL</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">'. $request->input('email') .'</td>';
		$message.='</tr>';

	// $telefono
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >TELEFONO</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">+'. $request->input('telefono') .'</td>';
		$message.='</tr>';

	// $pais
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >PAIS</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">'. $request->input('pais') .'</td>';
		$message.='</tr>';

	// $empresa
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >EMPRESA</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">'. $request->input('empresa') .'</td>';
		$message.='</tr>';

	// $message
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >MENSAJE</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">'. $request->input('message') .'</td>';
		$message.='</tr>';

		$message.='</table>';

		$titulo = 'Formulario de Contacto Tecnotropolis LLC';


	// Cabecera que especifica que es un HMTL
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Cabeceras adicionales
		$cabeceras .= 'From: Formulario de Contacto <'. $request->input('email') .'>' . "\r\n";


		if($request->input('pais_cl')=="Chile"){
			$correo='info@blu-tecnotropolis.cl';
			mail('info@blu-tecnotropolis.cl', $titulo, $message, $cabeceras);

		}else{
			$correo='info@blu-tecnotropolisla.com';
			mail('info@tecnotropolisla.com', $titulo, $message, $cabeceras);	
		}



		$message2 = "<p>Recibimos su <b>mensaje</b>, sera revisado y respondido por esta via. Saludos.</p>";
		$cabeceras2  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$cabeceras2 .= 'From: Tecnotropolis <'. $correo .'>' . "\r\n";
		mail($request->input('email'), 'Tecnotropolis LLC - Correo Recibido', $message2, $cabeceras2);

		

		return redirect()->route('home.index');
		



	}

	public function new(Request $request){

		$this->validate($request, [
			
			'email' => 'required'
			]);
		$cuenta = New Correo();
		$cuenta->correo=$request->input('email');
		$cuenta->fecha_creacion=date(now());
		$cuenta->bol_eliminado=0;
		$cuenta->save();

		return redirect()->route('home.index');
		

	}
}