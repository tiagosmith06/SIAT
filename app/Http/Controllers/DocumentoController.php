<?php

use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    // ... (métodos anteriores)

    public function show($id)
    {
        $documento = Documento::findOrFail($id);
        return view('documentos.show', compact('documento'));
    }

    public function download($id)
    {
        $documento = Documento::findOrFail($id);

        $
$pathToFile = storage_path('app/public/' . $documento->archivo);
        return response()->download($pathToFile, $documento->nombre_archivo);
    }
}

    }
}


    }
}
