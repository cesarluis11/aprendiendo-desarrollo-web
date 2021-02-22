<?php

namespace App\Http\Controllers;

use App\Busqueda;
use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class BusquedaController extends Controller
{

    public function anyDataBusqueda()
    {
        //return Datatables::of(DB::table('BakanArtAsistentes'))
        return Datatables::of(DB::select('select 
a.Grupo,
a.Rama,
asis.* 
from BakanArtAsistentes AS asis
JOIN art AS a ON  asis.Articulo = a.Articulo'))
        
            // ->filterColumn('Grupo', function($query, $keyword) {
            //         $query->whereRaw("CONCAT(BakanArtAsistentes.Grupo,'-',BakanArtAsistentes.Grupo) like ?", ["%{$keyword}%"]);
            //     })
            // ->filterColumn('Rama', function($query, $keyword) {
            //         $query->whereRaw("CONCAT(BakanArtAsistentes.Rama,'-',BakanArtAsistentes.Rama) like ?", ["%{$keyword}%"]);
            //     })
            // ->filterColumn('Articulo', function($query, $keyword) {
            //         $query->whereRaw("CONCAT(BakanArtAsistentes.Articulo,'-',BakanArtAsistentes.Articulo) like ?", ["%{$keyword}%"]);
            //     })
            // ->filterColumn('Descripcion1', function($query, $keyword) {
            //         $query->whereRaw("CONCAT(BakanArtAsistentes.Descripcion1,'-',BakanArtAsistentes.Descripcion1) like ?", ["%{$keyword}%"]);
            //     })
            // ->filterColumn('Descripcion2', function($query, $keyword) {
            //         $query->whereRaw("CONCAT(BakanArtAsistentes.Descripcion2,'-',BakanArtAsistentes.Descripcion2) like ?", ["%{$keyword}%"]);
            //     })
            // ->filterColumn('ClaveFabricante', function($query, $keyword) {
            //     $query->whereRaw("CONCAT(BakanArtAsistentes.ClaveFabricante,'-',BakanArtAsistentes.ClaveFabricante) like ?", ["%{$keyword}%"]);
            // })
            // ->filterColumn('Categoria', function($query, $keyword) {
            //     $query->whereRaw("CONCAT(BakanArtAsistentes.Categoria,'-',BakanArtAsistentes.Categoria) like ?", ["%{$keyword}%"]);
            // })
            // ->filterColumn('PrecioLista', function($query, $keyword) {
            //     $query->whereRaw("CONCAT(BakanArtAsistentes.PrecioLista,'-',BakanArtAsistentes.PrecioLista) like ?", ["%{$keyword}%"]);
            // })

            

            ->make(true);

    }
    
    public function index()
    {

        //print '<img src="public/images/maxresdefault.jpg" class="img-rounded" alt="Cinque Terre">';

        return view ('index');
    }

}
