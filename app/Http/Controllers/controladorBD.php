<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorDiario;
use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;

class controladorBD extends Controller
{
 
    public function index()
    {
        $ConsultaRec = DB::table('tb_recuerdos')->get();

        return view('recuerdo', compact('ConsultaRec'));

    }

    
    public function create()
    {
        return view('Registrar');
    }

 
    public function store(validadorDiario $req)
    {
        DB::table('tb_recuerdos')->insert([

            "titulo"=> $req->input('txtTitulo'),
            "recuerdo"=> $req->input('txtTexto'),
            "fecha"=> Carbon::now(),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);

        return redirect('recuerdo/create')->with('confirmacion','validacion');

    }

 
    public function edit($id)
    {

        $consultaID = DB::table('tb_recuerdos')->where('idRecuerdo', $id)->first();

        return view('editar', compact('consultaID'));
    }


    public function update(validadorDiario $req, $id)
    {
        DB::table('tb_recuerdos')->where('idRecuerdo', $id)->update([

            "titulo"=> $req->input('txtTitulo'),
            "recuerdo"=> $req->input('txtTexto'),
            "updated_at"=> Carbon::now(),

        ]);

        return redirect('recuerdo')->with('actualizar', 'abc');
    }

    
    public function show($id)
    {
        $consultaIDD = DB::table('tb_recuerdos')->where('idRecuerdo', $id)->first();

        return view('eliminar', compact('consultaIDD'));
    }

    public function destroy($id)
    {
        DB::table('tb_recuerdos')->where('idRecuerdo', $id)->delete();

        return redirect('recuerdo')->with('eliminado', 'cba');
    }
}
