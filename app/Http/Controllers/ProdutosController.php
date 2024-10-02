<?php

namespace App\Http\Controllers;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {
        //Mesma coisa que SELECT * FROM Categoria
        $produtos = Produtos::all();

        return view('produtos.index', compact('produtos'));
    }
}       