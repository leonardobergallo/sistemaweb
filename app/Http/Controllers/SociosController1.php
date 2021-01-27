<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Socios;

class SociosController extends Controller
{
    public function todas()
    {
        return view ('socios.todas', ['socios' => Socios::all()]);
    }
     
    public function favoritas()
    {
        return view ('socios.favoritas');
    }
    
    public function archivadas()
    {
        return view ('socios.archivadas');
    }

}
