<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ebook;
use App\Category;
use DB;
use Storage;

class StorageController extends Controller
{
public function index()
{

}

public function create(Request $request)
{ 
		$texto = new Ebook();
		$texto->users_id = \Auth::user()->id;
		$texto->name = $request->name;
		$texto->descripcion = $request->descripcion;
		$texto->category_id = $request->category_id;

	    //obtenemos el campo file definido en el formulario
       $file = $request->file('file');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
        if(DB::table('ebooks')->where('name', $texto->name)->get()){
                    $categorias = Category::orderBy('name', 'ASC')->lists('name','id');


            
            $mensaje = 'Nombre de texto ya existe';
            return view('ebooks.upload')
            ->with('mensaje', $mensaje)->with('categorias', $categorias);
        }else{
        if($_FILES["file"]["type"]== 'application/pdf'){
       //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($texto->name.".pdf",  \File::get($file));
     		     $url = Storage::url($nombre);
     		     DB::table('ebooks')->insert(
                ['name' => $texto->name, 'descripcion' => $texto->descripcion, 'users_id' => $texto->users_id, 'category_id' => $texto->category_id, 'ruta' => $url, 'estado' => '1']
            );
           return redirect()->action('EbooksController@index');
         }else{
                              $categorias = Category::orderBy('name', 'ASC')->lists('name','id');
                    $mensaje = 'Archivo no cumple con extension .pdf';
        return view('ebooks.upload')
            ->with('categorias', $categorias)->with('mensaje', $mensaje);
         }
     }
}

public function show()
   {
   			   		    	$categorias = Category::orderBy('name', 'ASC')->lists('name','id');
                    $mensaje = '0';
        return view('ebooks.upload')
            ->with('categorias', $categorias)->with('mensaje', $mensaje);
     
   }
}
