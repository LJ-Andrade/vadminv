<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Article;
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

	public function blog(Request $request)
	{

        $articles = Article::search($request->title)->orderBy('id', 'DESC')->where('status', 'active')->paginate(12);
        // $articles->each(function($articles){
        //     $articles->category;
        //     $articles->images;
        // }); 

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
        $articles = $category->article()->paginate(12);
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
        $articles = $tag->article()->paginate(12);
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
        
        return view('web.blog.article')->with('article', $article);
    }



}
