<?php

namespace App\Http\Controllers\Web;

use App\Models\Banco;
use App\Models\Fornecedor;
use App\Models\Grupo;
use App\Models\Mercadoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MercadoriasController extends Controller
{

    public function index()
    {
        $mercadorias = Mercadoria::paginate(15);
        return view('mercadoria.index',compact('mercadorias'));
    }

    public function create()
    {
        $fornecedores = Fornecedor::all();
        $grupos       = Grupo::all();
        $bancos       = Banco::all();
        return view('mercadoria.create',compact('fornecedores','bancos','grupos'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
