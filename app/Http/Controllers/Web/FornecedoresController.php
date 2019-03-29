<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\FornecedorCreateRequest;
use App\Models\Banco;
use App\Models\Fornecedor;
use App\Service\FornecedorService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FornecedoresController extends Controller
{


    private  $service;

    public function __construct(FornecedorService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $fornecedores = Fornecedor::paginate(5);
        return view('fornecedor.index',compact('fornecedores'));
    }


    public function create()
    {
        $bancos = Banco::all();
        return view('fornecedor.create',compact('bancos'));
    }

    public function store(FornecedorCreateRequest $request)
    {
        $fornecedor = $this->service->create($request);
        return redirect(route('fornecedores.index'));
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(FornecedorCreateRequest $request, $id)
    {
        $fornecedor = $this->service->update($request, $id);
        //return redirect(route('fornecedores.index'));
    }


    public function destroy($id)
    {
        //
    }
}