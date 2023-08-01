<?php

namespace App\Http\Controllers;

use App\Models\produto;
use App\Models\usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login(Request $request){
        // dd($request->all());
        $email = $request->email;
        $senha = $request->senha;




        $usuarios = usuario::where('email', '=', $email)->where('senha', '=', $senha)->first();


        if (@$usuarios->id !=null){
            @session_start();
            $_SESSION['id_usuario'] = $usuarios->id;
            $_SESSION['nome_usuario'] = $usuarios->nome;
            $_SESSION['nivel_usuario' ]= $usuarios->nivel;

            //return $_SESSION('nome_usuario');
            $produtos = produto::orderby('id', 'desc')->paginate();
            return view('produtos.index', ['produtos' => $produtos]);

            }else{
            echo "<script language='javascript'> window.alert('dados Incorretos!') </script>";
            return view('home');

        }
}

    public function logout(){
        return 'logout';

    }

}
