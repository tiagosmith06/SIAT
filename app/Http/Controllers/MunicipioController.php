<?php

// app/Http/Controllers/MunicipioController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;

class MunicipioController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');
        $municipios = Municipio::when($query, function ($query) use ($request) {
            return $query->where('nombre', 'like', '%' . $request->input('search') . '%')
                         ->orWhere('departamento', 'like', '%' . $request->input('search') . '%');
        })->paginate(10);

        return view('biogeografico', compact('municipios'));
    }
}
