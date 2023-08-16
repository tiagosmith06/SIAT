<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gestion;
class GestionController extends Controller
{




public function index()
{
    $gestiones = Gestion::all();
    return view('pages.gestiondocumental', compact('gestiondocumental'));
}

public function create()
{
    return view('pages.create');
}

public function store(Request $request)
{
    // Validación y almacenamiento en la base de datos
}

public function show(Gestion $gestion)
{
    return view('pages.show_gestion', compact('gestiondocumental'));
}

public function edit(Gestion $gestion)
{
    return view('pages.edit_gestion', compact('gestiondocumental'));
}

public function update(Request $request, Gestion $gestion)
{
    // Validación y actualización en la base de datos
}

public function destroy(Gestion $gestion)
{
    $gestion->delete();
    return redirect()->route('pages.gestiondocumental')->with('success', 'Gestión eliminada correctamente');
}
}
