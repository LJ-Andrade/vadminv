<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Article;
use App\Category;
use App\Tag;
use App\PortArticle;
use App\PortCategory;
use App\Newsletter;
use Validator;

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

    public function addnewsletter(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:newsletter'    
        ],[
            'email.unique'         => 'El email ya está registrado en el newsletter'
        ]);

        if ($validator->fails()) {
            return response()->json(['response' => 'E',
                                     'message'  => $validator->errors()->first()
                                    ]); 
            
        }

        $suscriptor    = $request->email;
        $newsuscriptor = new Newsletter($request->all());
        
        try{
            $newsuscriptor->save();
            return response()->json(['response' => 'Ok',
                                     'message'  => 'Ya está suscrito ! Muchas gracias !'
                                    ]);
        } 
        catch(\Exception $e){
            return response()->json(['response' => 'E',
                                     'message' => $e]); 
        }
        
    }

    public function mail_sender(Request $request)
    {

		$MailToAddress = "info@vdeverde.com.ar";
		$MailSubject   = "Mensaje desde la web";

		if (!isset($MailFromAddress) ) {
			$MailFromAddress = "info@vdeverde.com.ar";
		}

		$Header  = "Contacto desde la Web";
		$Message = $Footer = "";

		if (!is_array($_POST))
			return;
			reset($_POST);

		// Genera un mensaje personalizado.
		$Message  = "Nombre/Empresa: ".stripslashes($_POST['name'])." \n";
		$Message .= "Tel.: ".stripslashes($_POST['tel'])." \n";
		$Message .= "E-Mail: ".stripslashes($_POST['email'])." \n";
		$Message .= "Consulta/Mensaje: ".stripslashes($_POST['message'])." \n";

		if ($Header) {
			$Message = $Header."\n\n".$Message."\n\n";
		}

		// $REMOTE_USER = (isset($_SERVER["REMOTE_USER"]))?$_SERVER["REMOTE_USER"]:"";
		$REMOTE_ADDR = (isset($_SERVER["REMOTE_ADDR"]))?$_SERVER["REMOTE_ADDR"]:"";
		// $Message .= "REMOTE USER: ". $REMOTE_USER."\n";
		$Message .= "I.P del contacto: ". $REMOTE_ADDR."\n";

		if ($Footer) {
			$Message .= "\n\n".$Footer;
		}

		mail( "$MailToAddress", "$MailSubject", "$Message", "From: $MailFromAddress");


		function ValidarDatos($campo){
			//Array con las posibles cabeceras a utilizar por un spammer
			$badHeads = array("Content-Type:",
			"MIME-Version:",
			"Content-Transfer-Encoding:",
			"Return-path:",
			"Subject:",
			"From:",
			"Envelope-to:",
			"To:",
			"bcc:",
			"cc:");
			//Comprobamos que entre los datos no se encuentre alguna de
			//las cadenas del array. Si se encuentra alguna cadena se
			//dirige a una página de Forbidden
			foreach($badHeads as $valor){
				if(strpos(strtolower($campo), strtolower($valor)) !== false){
					header( "HTTP/1.0 403 Forbidden");
					exit;
				}
			}
		}

		//Ejemplo de llamadas a la funcion
		ValidarDatos($_POST['name']);
		ValidarDatos($_POST['email']);
		ValidarDatos($_POST['tel']);
		ValidarDatos($_POST['message']);
 
		return response()->json(['response' => $Message]); 

		}

    public function mail_sender_mayorist(Request $request)
    {

		$MailToAddress    = "mayoristas@vdeverde.com.ar";
		$MailSubject      = "Mensaje desde la web - MAYORISTA";

		if (!isset($MailFromAddress) ) {
			$MailFromAddress = "mayoristas@vdeverde.com.ar";
		}

		$Header = "Contacto desde la Web - MAYORISTA";
		$Message = $Footer = "";

		if (!is_array($_POST))
			return;
			reset($_POST);

		// Genera un mensaje personalizado.
        $Message .= "MAYORISTA \n";
        $Message .= "--------- \n";
		$Message .= "Contacto / Encargado: ".stripslashes($_POST['contacto'])." \n";
        $Message .= "Nombre de Tienda: ".stripslashes($_POST['nombretienda'])." \n";
        $Message .= "Localidad: ".stripslashes($_POST['localidad'])." \n";
		$Message .= "Direccion: ".stripslashes($_POST['direccion'])." \n";
        $Message .= "Web / Facebook: ".stripslashes($_POST['webfacebook'])." \n";
		$Message .= "E-Mail: ".stripslashes($_POST['email'])." \n";
        $Message .= "Tel.: ".stripslashes($_POST['tel'])." \n";
		$Message .= "Consulta/Mensaje: ".stripslashes($_POST['message'])." \n";

		if ($Header) {
			$Message = $Header."\n\n".$Message."\n\n";
		}

		// $REMOTE_USER = (isset($_SERVER["REMOTE_USER"]))?$_SERVER["REMOTE_USER"]:"";
		$REMOTE_ADDR = (isset($_SERVER["REMOTE_ADDR"]))?$_SERVER["REMOTE_ADDR"]:"";
		// $Message .= "REMOTE USER: ". $REMOTE_USER."\n";
		$Message .= "I.P del contacto: ". $REMOTE_ADDR."\n";

		if ($Footer) {
			$Message .= "\n\n".$Footer;
		}

		mail( "$MailToAddress", "$MailSubject", "$Message", "From: $MailFromAddress");
        

		function ValidarDatos($campo){
			//Array con las posibles cabeceras a utilizar por un spammer
			$badHeads = array("Content-Type:",
			"MIME-Version:",
			"Content-Transfer-Encoding:",
			"Return-path:",
			"Subject:",
			"From:",
			"Envelope-to:",
			"To:",
			"bcc:",
			"cc:");
			//Comprobamos que entre los datos no se encuentre alguna de
			//las cadenas del array. Si se encuentra alguna cadena se
			//dirige a una página de Forbidden
			foreach($badHeads as $valor){
				if(strpos(strtolower($campo), strtolower($valor)) !== false){
					header( "HTTP/1.0 403 Forbidden");
					exit;
				}
			}
		}

            //Ejemplo de llamadas a la funcion
            ValidarDatos($_POST['contacto']);
            ValidarDatos($_POST['nombretienda']);
            ValidarDatos($_POST['localidad']);
            ValidarDatos($_POST['direccion']);
            ValidarDatos($_POST['webfacebook']);
            ValidarDatos($_POST['email']);
            ValidarDatos($_POST['tel']);
            ValidarDatos($_POST['message']);
    
            return response()->json(['response' => $Message]); 

		}

	public function blog(Request $request)
	{
        $articles   = Article::search($request->title)->orderBy('id', 'DESC')->where('status', 'active')->paginate(15);
        $categories = Category::all();
        $tags       = Tag::all();

    	return view('web.blog.blog')
    	    ->with('articles', $articles)
            ->with('categories', $categories)
            ->with('tags', $tags);
    }

    
    public function searchCategory($name)
    {
        $category = Category::SearchCategory($name)->first();
        $articles = $category->article()->paginate(6);
        $articles->each(function($articles){
                $articles->category;
                $articles->images;
            });
            
            $categories = Category::all();
            $tags       = Tag::all();
            
            return view('web.blog.blog')
            ->with('articles', $articles)
            ->with('categories', $categories)
            ->with('tags', $tags);
        }
    
    public function searchTag($name)
    {
        $tag = Tag::SearchTag($name)->first();
        $articles = $tag->article()->paginate(6);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        
        $categories = Category::all();
        $tags       = Tag::all();
        
        return view('web.blog.blog')
        ->with('articles', $articles)
        ->with('categories', $categories)
        ->with('tags', $tags);
    }
    
    public function viewArticle($id)
    {
        $article = Article::find($id);
        $article->each(function($article){
                $article->category;
                $article->images;
                $article->tags;
                $article->colors;
        });

        return view('web.blog.article')->with('article', $article);
    }

    public function showWithSlug($slug) {

        $article = Article::where('slug', '=', $slug)->first();

        $categories = Category::all();
        $tags       = Tag::all();
        
        return view('web.blog.article')->with('article', $article)->with('categories', $categories)
            ->with('tags', $tags);
    }
    
    // ------------------- Portfolio ---------------------- //

    public function showPortArticleWithSlug($slug) {
        $article    = PortArticle::where('slug', '=', $slug)->first();
        $categories = PortCategory::all();
        return view('web.blog.article')->with('article', $article)->with('categories', $categories);
    }
    
    public function portfolio(Request $request)
    {
        $articles       = PortArticle::search($request->title)->orderBy('id', 'DESC')->where('status', 'active')->paginate(15);
        $portCategories = PortCategory::all();
        
        return view('web.portfolio.portfolio')
            ->with('articles', $articles)
            ->with('portCategories', $portCategories);
    }

    
    public function searchPortCategory($name)
    {
        $category = PortCategory::SearchPortCategory($name)->first();
        
        if($category == null){
            $categories = null;
            $articles   = null;
        } else {
            $articles = $category->article()->paginate(12);
            $articles->each(function($articles){
                $articles->category;
            });
            $portCategories = PortCategory::all();
        }

        return view('web.portfolio.portfolio')
            ->with('articles', $articles)
            ->with('portCategories', $portCategories);
    }

    public function viewPortArticle($id)
    {
        $article = PortArticle::find($id);
        $article->each(function($article){
                $article->category;
                $article->colors;
        });

        return view('web.portfolio.article')->with('article', $article);
    }


}
