<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Financeiro;

class FinanceiroController extends Controller
{

    public function index()
    {
        return Financeiro::all();
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function show($id)
    {
        return Financeiro::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $financeiro = Financeiro::findOrFail($id);
        $financeiro->update($request->all());
    }


    public function destroy($id)
    {
        $financeiro = Financeiro::findOrFail($id);
        $financeiro->delete();
    }
}
