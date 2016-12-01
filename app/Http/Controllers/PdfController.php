<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App;
use App\Ebook;
use App\Category;
use DB;
use PDF;
use Storage;

class PdfController extends Controller
{
    public function index()
    {

    }
    public function show()
    {
    	    	$pdf = App::make('dompdf.wrapper');
$pdf->loadHTML('<h1>Test</h1>');
return $pdf->stream();
    }
    public function create(Request $request)
    {
    	$name = $request->nombre;
        $m = DB::table('ebooks')->where('name', $name)->first();
        $id = $m->id;
        $ebook = DB::table('ebooks')->where('id', $id)->first();
        $archivo = $ebook->name;
        $archivo1 = $archivo.".html";
        if(Storage::disk('local')->exists($archivo1))
        {
        	$contents = Storage::get($archivo1);
        	    	$pdf = App::make('dompdf.wrapper');
		$pdf->loadHTML($contents);
		return $pdf->stream();
        }
        else
        {
            $archivo2 = $archivo.".pdf";
            $pdf = Storage::get($archivo2);
  			return new Response($pdf);
        	
        }

        
        

    }
}
