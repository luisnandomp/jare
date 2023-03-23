<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jacare;

class JacaresController extends Controller
{
    public function index() {
        $jacares = Jacare::all();
        return view('jacare.index', compact ('jacares'));
    }

    public function home() {
        return view('jacare.home');
    }

    public function create() {
        return view('jacare.create');
    }

    public function store(Request $dados)
    {
        $jacares = new Jacare($dados->all());

        $dados->validate([
            'nome' => 'required',
            'peso' => 'required',
            'tamanho' => 'required',
            'sexo' => 'required',
            'vacinado' => 'required'
        ]);

        $jacares = Jacare::create($dados->all());
        return redirect()->route('jacare.index');

    }

    public function show(Jacare $jacare)
    {
        return view('jacare.show', compact('jacare'));
    }
}
