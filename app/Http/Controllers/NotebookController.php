<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;

class NotebookController extends Controller
{

    public function index()
    {
        return \response()->json(Note::all());
    }

    public function show($id)
    {
        return \response()->json(Note::find($id));
    }

    public function store(NoteRequest $request)
    {
        $validate = $request->validated();
        $path = $validate['photo']->store('public/photos');
        $arrPath = explode('/', $path);
        $name = end($arrPath);
        $validate['photo'] = $name;
        Note::create($validate);
        $validate['successful'] = 'ok';
        return \response()->json([$validate]);
    }
    public function update(NoteRequest $request, $id)
    {
        $validate = $request->validated();
        $path = $validate['photo']->store('public/photos');
        $arrPath = explode('/', $path);
        $name = end($arrPath);
        $validate['photo'] = $name;
        Note::find($id)->update($validate);
        $validate['update'] = 'ok';
        return \response()->json([$validate]);
    }
    public function destroy($id)
    {
        Note::find($id)->delete($id);
        $validate = ['destroy' => 'ok'];
        return \response()->json([$validate]);
    }

    public function paginate()
    {
        $notes = Note::paginate(1);
        return \response()->json($notes);
    }
}
