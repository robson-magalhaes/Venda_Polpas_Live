<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pedidos;
use App\Models\Produtos;
use App\Models\Clientes;
use App\Models\Carts;

class SiteController extends Controller
{
    public function home(Request $req){
        $dados = Carts::all();
        $dadosClientes = Clientes::all();
        if($req->filtro){
            $dadosClientes = Clientes::all()->sortBy($req->filtro);
        }else{
            $dadosClientes = Clientes::all()->sortBy('updated_at');
        }
        $nome = Auth::user()->name;
        return view('home', ['dados' => $dados, 'nome' => $nome, 'dadosClientes'=>$dadosClientes]);
    }

    public function add_cliente(Request $req){
            $nomeReq = $req->nome;
            $cliente = Clientes::where('nome','like', '%'.$nomeReq.'%')->get()->toArray();
            return view('add_cliente', ['cliente' => $cliente]);
    }

    public function add_cliente_action(Request $req){
            $nomeReq = $req->nome;

            $cliente = Clientes::where('nome','like', '%'.$nomeReq.'%')->get()->toArray();
            if($req->nome == null || $req->endereco == null || $req->telefone == null){
                return redirect()->back();
            }
            else if($cliente !== []){
                $info = $cliente[0];
                return redirect()->route('add.produtos',[
                    'info'=>$info
                ]);
            }
            else{
                $info = $req->only('nome', 'endereco', 'telefone');
                $dados = Clientes::create($info);
                return redirect()->route('add.produtos',[
                    'dados'=>$dados,
                    'info'=>$info
                ]);
            }
    }
    
    public function delete_produto($id){
        $a = Clientes::find($id);
        $a->delete();

        return redirect()->back();
    }
    public function obrigado(Request $req){
        return view('agradecimento');
    }
}
