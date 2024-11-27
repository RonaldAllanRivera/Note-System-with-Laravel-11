<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Notebook;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::id();
        $notes = Note::where('user_id', $user_id)->latest('updated_at')->paginate(3);
        // dump only the note title - testing only
        // $notes->each(function($note) {
        //     dump($note->title);

        // });

        // dd all columns - testing only
        // dd($notes);
        
        // Show all notes
        return view('notes.index')->with('notes', $notes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $notebooks = Notebook::where('user_id', Auth::id())->get();
        return view('notes.create')->with('notebooks', $notebooks);;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // testing only
        // dd($request);

        $request->validate([
            'title' => 'required|max:120',
            'text' => 'required'
            ]);

        $note = new Note([
            'user_id' => Auth::id(),
            'uuid' => Str::uuid(),
            'title' => $request->title,
            'text' => $request->text,
            'notebook_id' => $request->notebook_id,
        ]);

        $note->save();

        return to_route('notes.show', $note);
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        if ($note->user_id != Auth::id())
        {
            abort(403);
        }

        return view('notes.show', ['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        if ($note->user_id != Auth::id())
        {
            abort(403);
        }

        $notebooks = Notebook::where('user_id', Auth::id())->get();

        return view('notes.edit', ['note' => $note, 'notebooks' => $notebooks]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        if ($note->user_id != Auth::id())
        {
            abort(403);
        }

        $request->validate([
            'title' => 'required|max:120',
            'text' => 'required'
            ]);

        $note->update([
            'title' => $request->title,
            'text' => $request->text,
            'notebook_id' => $request->notebook_id,
        ]);        

        return to_route('notes.show', $note)->with('success', 'Note Changes Saved.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        if ($note->user_id != Auth::id())
        {
            abort(403);
        }

        $note->delete();

        return to_route('notes.index')->with('success', 'Note Deleted.');
    }
}
