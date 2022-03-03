<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        return Produto::all();
    }

    public function store()
    {
        request()->validate([
            'name' => 'required'
        ]);
    
        return Produto::create([
            'name' => request('name')
        ]);
    }

    public function update(Produto $produtos)
    {
        request()->validate([
            'name' => 'required'
        ]);
    
        $sucesso = $produtos->update([
            'name' => request('name')
        ]);
    
        return [
            'sucess' => $sucesso
        ];
    }

    public function destroy(Produto $produtos)
    {
        $sucesso = $produtos->delete();

        return [
            'sucess' => $sucesso
        ];
    }
}
