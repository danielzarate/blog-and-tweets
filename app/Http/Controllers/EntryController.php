<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class EntryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('entries.create');
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:entries|max:255',
            'content' => 'required|min:25|max:3000',
        ]);

       

        $entry = new Entry();
        $entry->title = $validatedData['title'];
        $entry->content = $validatedData['content'];
        $entry->user_id = auth()->id();
        $entry->save();

        $status='Your entry has been publish sucessfully';
        return back()->with(compact('status'));

    }

}
