<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\remediobrasil;
use Illuminate\Support\Facades\Redirect;

class RemediobrasilController extends Controller
{
     //CRUD
    //C-create salvar os contatos na tabela
    function SalvarRemedio(Request $request){
        $registros = $request ->validate([
        'nome' => 'string|required',
        'convenio' => 'string|required',
        'medicamento' => 'string|required',
        'dosagem' => 'numeric:6,2|required',
        'preco' => 'numeric:6,2|required'
        ]);
        remediobrasil::create($registros);
        return Redirect::route('home-remedio');
    }
     //CRUD
    //R- read mostrar os registros da tabela
    public function ShowFormulario(){
        return view('cadastroRemedio');
    }
     //CRUD
    //D - Delete Apagar um registro na tabela
    public function destroy(remediobrasil $id){
        $id->delete();
        return Redirect::route('home-remedio');
    }
    //CRUD
    //U-Update alterar um registro
    public function update(remediobrasil $id, Request $request){
        $registros = $request->validate([    
        'nome' => 'string|required',
        'convenio' => 'string|required',
        'medicamento' => 'string|required',
        'dosagem' => 'numeric:6,2|required',
        'preco' => 'numeric:6,2|required'
        ]);
        $id->fill($registros);
        $id->save();
        return Redirect::route('home-remedio');
    }
    public function RemedioHome(){
        return view('home');
    }

    public function gerenciarRemedio(Request $request){
        $registros = remediobrasil::query();
        $registros->when($request->nome,function($query,$valor){
            $query->where('nome','like','%'.$valor.'%');
        });
        $todosRegistros = $registros->get();
        return view('gerenciaRemedio',['registrosRemedio'=>$todosRegistros]);

    }
    public function mostrarRemedioId(remediobrasil $id){
        return view('alterarRemedio',['registrosRemedio'=>$id]);
    }
}
