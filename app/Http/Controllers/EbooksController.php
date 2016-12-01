<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ebook;
use App\Category;
use DB;
use Storage;
use Validator;
use Input;

class EbooksController extends Controller
{
    public function index()
    {   
        $users_id = \Auth::user()->id;
        $ebooks = DB::table('ebooks')->where('users_id', $users_id)->paginate(30);

        return view('home')
            ->with('ebooks', $ebooks);
    }
    public function editar(Request $request)
    {
        $name = $request->nombre;
        $m = DB::table('ebooks')->where('name', $name)->first();
        $id = $m->id;
        return redirect()->action('EbooksController@show', ['id' => $id]);
    }
    public function ckeditor(Request $request)
    {
        $guardar = $request->guardar;
        if($guardar == '0'){
        $archivo = $request->nombre;
        $archivo1 = $archivo.".html";
        
        Storage::put($archivo1,$request->editor1);
        $url = Storage::url($archivo1);
        DB::table('ebooks')
            ->where('name', $request->nombre)
            ->update(['ruta' => $url]);
        return redirect('/inicio');

        }
        if($guardar == '1'){
        $archivo = $request->nombre;
        $archivo1 = $archivo.".html";
        
        Storage::put($archivo1,$request->editor1);
        $url = Storage::url($archivo1);
        DB::table('ebooks')
            ->where('name', $request->nombre)
            ->update(['ruta' => $url, 'estado' => '1']);
        return redirect('/inicio');

        }


    }

    public function create()
    {
    	$categorias = Category::orderBy('name', 'ASC')->lists('name','id');
        $mensaje = '0';
        return view('ebooks.crear')
            ->with('categorias', $categorias)->with('mensaje', $mensaje);
    }
    public function store(Request $request)
    {
        
        $ebook = new Ebook($request->all());
        $ebook->users_id = \Auth::user()->id;
        
        if(DB::table('ebooks')->where('name', $ebook->name)->get()){
                    $categorias = Category::orderBy('name', 'ASC')->lists('name','id');


            
            $mensaje = 'Nombre de texto ya existe';
            return view('ebooks.crear')
            ->with('mensaje', $mensaje)->with('categorias', $categorias);
        }else{
           $id = DB::table('ebooks')->insertGetId(
                ['name' => $ebook->name, 'descripcion' => $ebook->descripcion, 'users_id' => $ebook->users_id, 'category_id' => $ebook->category_id]
            );
            return redirect()->action('EbooksController@show', ['id' => $id]);
        }
    }

    public function show($id)
    {
        $ebook = DB::table('ebooks')->where('id', $id)->first();
        $archivo = $ebook->name;
        $archivo1 = $archivo.".html";
        if(Storage::disk('local')->exists($archivo1))
        {
        $contents = Storage::get($archivo1);
        
        return view('ebooks.index')
            ->with('ebook', $ebook)->with('contents',$contents);
        }else{
            $contents = ' ';
        return view('ebooks.index')
            ->with('ebook', $ebook)->with('contents',$contents);
        }

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255|unique:ebook',
        ]);
    }
}
