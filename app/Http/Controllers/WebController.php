<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Producto;
use App\Category;
use App\Tag;


class WebController extends Controller
{

	public function __construct()
	{
        // Date convert to passed time plugin
		Carbon::setLocale('es');
	}

    public function home()
    {        
        return view('web');
    }

    public function contact()
    {  
        return view('contacto');
    }

    public function mail_sender(Request $request){



        // $MailToAddress    = "javzero@hotmail.com";
        // $MailSubject      = "Mensaje desde la web";

        // if (!isset($MailFromAddress) ) {
        //     $MailFromAddress = "info@vdeverde.com.ar";
        // }
        
        // $Header = "Contacto desde la Web";
        // $Message = $Footer = "";
         
        // if (!is_array($_POST))
        // return;
        // reset($_POST);

        // // Genera un mensaje personalizado.
        // $Message  = "Nombre/Empresa: ".stripslashes($_POST['name'])." \n";
        // $Message .= "Tel.: ".stripslashes($_POST['tel'])." \n";
        // $Message .= "E-Mail: ".stripslashes($_POST['email'])." \n";
        // $Message .= "Consulta/Mensaje: ".stripslashes($_POST['message'])." \n";
        // $chota    = 'Soy una chota';

        // if ($Header) {
        //     $Message = $Header."\n\n".$Message."\n\n";
        // }

        // // $REMOTE_USER = (isset($_SERVER["REMOTE_USER"]))?$_SERVER["REMOTE_USER"]:"";
        // $REMOTE_ADDR = (isset($_SERVER["REMOTE_ADDR"]))?$_SERVER["REMOTE_ADDR"]:"";
        // // $Message .= "REMOTE USER: ". $REMOTE_USER."\n";
        // $Message .= "I.P del contacto: ". $REMOTE_ADDR."\n";
         
        // if ($Footer) {
        // $Message .= "\n\n".$Footer;
        // }
        
        // mail( "$MailToAddress", "$MailSubject", "$Message", "From: $MailFromAddress");
   

        // function ValidarDatos($campo){
        //   //Array con las posibles cabeceras a utilizar por un spammer
        //   $badHeads = array("Content-Type:",
        //   "MIME-Version:",
        //   "Content-Transfer-Encoding:",
        //   "Return-path:",
        //   "Subject:",
        //   "From:",
        //   "Envelope-to:",
        //   "To:",
        //   "bcc:",
        //   "cc:");
        //   //Comprobamos que entre los datos no se encuentre alguna de
        //   //las cadenas del array. Si se encuentra alguna cadena se
        //   //dirige a una página de Forbidden
        //     foreach($badHeads as $valor){
        //       if(strpos(strtolower($campo), strtolower($valor)) !== false){
        //       header( "HTTP/1.0 403 Forbidden");
        //       exit;
        //       }
        //     }
        // }


        // //Ejemplo de llamadas a la funcion
        // ValidarDatos($_POST['name']);
        // ValidarDatos($_POST['email']);
        // ValidarDatos($_POST['tel']);
        // ValidarDatos($_POST['message']);

        $Message = 'Todo ok';
        return response()->json(['response' => $Message]); 

        // // if (1==1){    
        // //     } 
        // //     else {
        // //         return response()->json(['response' => 'This is get method']);
        // //     }

        }

	public function portfolio(Request $request)
	{

        $productos = Producto::search($request->title)->orderBy('id', 'DESCC')->where('status', 'active')->paginate(12);
        $productos->each(function($articles){
            $productos->category;
            $productos->images;
        }); 

    	return view('web.producto.producto')
    	->with('productos', $productos);
    }


    public function searchCategory($name)
    {
        $category = Category::SearchCategory($name)->first();
        $articles=$category->article()->paginate(12);
        $articles->each(function($articles){
                $articles->category;
                $articles->images;
        });
        return view('web.portfolio.portfolio')->with('articles', $articles);
    }

    public function searchTag($name)
    {
        $tag = Tag::SearchTag($name)->first();
        $productos = $tag->article()->paginate(12);
        $productos->each(function($articles){
                $productos->category;
                $productos->images;
        });
        return view('web.producto.producto')->with('productos', $productos);
    }

    public function viewArticle($id)
    {
        $producto = Producto::find($id);
        $producto->each(function($article){
                $producto->category;
                $producto->images;
                $producto->tags;
                $producto->colors;
        });

        return view('web.portfolio.producto')->with('producto', $producto);
    }

    public function showWithSlug($slug) {

        $producto = Producto::where('slug', '=', $slug)->first();
        // dd($article);
        return view('web.portfolio.producto')->with('producto', $producto);
    }



}
