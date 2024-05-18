<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::where('user_id', Auth::user()->id)->get();
        return response()->json($notes, 200);
    }

    public function store(Request $request)
    {
        $note = new Note;
        $note->user_id = Auth::user()->id;
        $note->content = $request->content;
        $note->save();
        return response()->json(['message' => 'Success'], 200);
    }

    public function destroy(int $id){
        // 1. Encontramos la nota
        $note = Note::find($id);

        // 2. Verificamos que la nota existe
        if(!$note){
            return response()->json(['status' => 'false','message' => 'Note not found'], 404);
        }

        // 3. Eliminamos la nota si existe
        $note->delete();

        // 4. Retornamos respuesta exitosa
            return response()->json(['status' => 'true', 'message' => 'Note deleted'], 200);

    }

    public function update(Request $request,int $id){
     

        // 1. Validamos datos entrantes 
        $validatedData = $request->validate([
            'content' => 'required|string|max:255'
        ]);

        // 2. Encontramos la nota
        $note = Note::find($id);

        // 3. Verificamos que la nota existe
        if(!$note){
            return response()->json(['status' => 'false','message' => 'Note not found'], 404);
        }
    

        // 4. Actualizamos la nota
        $note->content=$validatedData['content'];
        // 5. Guardamos cambios
        $note->save();

        // 4. Retornamos respuesta exitosa
            return response()->json(['status' => 'true', 'message' => 'Note updated'], 200);

    }
}
