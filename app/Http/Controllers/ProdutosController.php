<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = produto::orderby('id', 'desc')->paginate();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create(){
        return view('produtos.create');
    }
    public function insert(Request $request){
        //return view('produtos.insert');
        dd($request->all());
        $produto = new produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->estoque = $request->estoque;
        $produto->descricao = $request->descricao;
        $produto->save();
        return redirect()->route('produtos');
    }

    public function show($id){
        $produto = Produto::find($id);

        if ($produto == null){
            return redirect()->back()->with('error', 'produto nao encontrado');
        }
        //dd($produto);
        return view('produtos.show', ['produto' => $produto]);
    }

   /* public function show($nome,$valor = null){
        return view('produtos.show', ['nome' => $nome, 'valor' => $valor]);

        if($valor){  //nao exclui essa bosta por hora//
            return "o nome do produto é $nome, e seu valor é $valor";
        }else{
            return "o nome do produto é $nome!";
    }
    */
    public function edit(produto $produto){
        return view('produtos.edit', ['produto' => $produto]);

    }

    public function editar(Request $request, produto $produto){
        //return view('produtos.insert');

        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->estoque = $request->estoque;
        $produto->descricao = $request->descricao;
        $produto->save();
        return redirect()->route('produtos');
    }
    public function delete(produto $produto){
       // $produto->delete();
      //  return redirect()->route('produtos');
    }
    public function modal($id){
      $produtos = produto::orderby('id', 'desc')->paginate();
        return view('produtos.index', ['produtos' => $produtos, 'id' => $id]);

   }

}
