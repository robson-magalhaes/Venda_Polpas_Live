<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Produtos;
use App\Models\Carts;
use App\Models\Clientes;
use Illuminate\Http\Request;

class CestaController extends Controller
{
    public function index(Request $req){
        $produtos = Produtos::all();
        $total = 0;
        $info = $req->info;
        if(isset($req->dados)){
            $cliente_id = $req->dados;
        }else if(isset($req->info['id'])){
            $cliente_id = $req->info['id'];
        }

        $carrinho = Carts::where('cliente_id','=', $cliente_id)->get();
        $dados = [
            'produtos'=>$produtos,
            'info'=>$info,
            'carrinho'=>$carrinho,
            'cliente_id'=>$cliente_id,
            'total'=>$total
        ];
        // $valor = Carts::where('produtos_id')->get();
        return view('add_produtos', $dados);
    }

    public function addItemCart(Request $req){
        $data = [
            'nome' => $req->nomeProd,
            'quantidade' =>$req->quantidade,
            'valor'=>$req->valor,
            'cliente_id'=> $req->cliente_id,
            'produtos_id' => $req->produtos_id
        ];

        $p = Carts::where(['produtos_id' => $req->produtos_id])->get();
        if(count($p) > 0){
                $cart = Carts::firstOrCreate(['produtos_id' => $req->produtos_id]);
                $cart->quantidade += $data['quantidade'];
                $cart->save();
            }else{
                Carts::create($data);
            }

        return redirect()->back();
    }

    public function deleteItemCart($id){
        // dd($id);
        Carts::find($id)->delete();
        return redirect()->back();
    }
}
