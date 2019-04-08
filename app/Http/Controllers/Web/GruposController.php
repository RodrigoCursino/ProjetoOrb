<?php

namespace App\Http\Controllers\Web;

use App\Models\Grupo;
use App\Models\NCM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GruposController extends Controller
{

    public function index()
    {
        $grupos = Grupo::paginate(15);
        return view('grupo.index',compact('grupos'));
    }

    public function create()
    {
        $ncms  = NCM::all();
        return view('grupo.create', compact('ncms'));
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
        $grupo = Grupo::findOrFail($id);
        $ncms  = NCM::all();
        return view('grupo.create', compact('grupo','ncms'));
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
