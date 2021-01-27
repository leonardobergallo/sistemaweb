<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\SocioFormRequest;
use App\Socio;   
class SocioController extends Controller



{
    
    public function index(Request $request)
    {
       
       $query=trim($request->get('search'));

       if ($request) {
        $query=trim($request->get('search'));
        $socios=Socio::where('name','LIKE','%' .$query.'%')
            ->orderBy ('id','asc')
            ->paginate(5);

            //dd($Socios);
            return view('socios.index', ['socios' => $socios, 'search' =>$query]);
       }

        // $Socios = Socio::all();
       // return view('socios.index', ['Socios' => $Socios]);
            
    }

    
    public function create()
    {
        return view('socios.create');
    }

    
    public function store(Request $request)
    {
        $socio = new Socio();

        $socio->name = request ('name');
        $socio->Domicilio = request ('Domicilio');
        $socio->Localidad = request ('Localidad');
        $socio->Colabor = request ('Colabor');
        $socio->Provincia = request ('Provincia');
        $socio->Telefono = request ('Telefono');
        $socio->En = request ('En');
        $socio->Tarjeta  = request ('Tarjeta');
        $socio->FAlta = request ('FAlta');
        $socio->Imp  = request ('Imp');
        $socio->ClaseSocio = request ('ClaseSocio');
        $socio->email  = request ('email');
        $socio->Programa = request ('Programa');
        $socio->Enco  = request ('Enco');
        $socio-> save();
        return redirect('/socios');



    }

  
    public function show($id)
    {
        return view('socios.show',['socio' => Socio::findOrFail($id)]);
    }

    
  
    public function edit($id)
    {
        return view('socios.edit',['socio' => Socio::findOrFail($id)]);
    }

    
    public function update(SocioFormRequest $request, $id)
    {
        $socio =  Socio::findOrFail($id);

        $socio->name = $request->get('name');
        $socio->email = $request->get('email');
        $socio-> update();

        return redirect('/socios');
    }

    
    public function destroy($id)
    {
        $socio = Socio::findOrFail($id);
        $socio->delete();
        return redirect('/socios');
    }
}
