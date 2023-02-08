<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view("author.index", compact('authors'));
    }
    public function create()
    {
        return view("author.create");
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:10',

        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }


        $author = new Author();

        $author->name = $request->input('name');
        $author->image = $request->input('image');
        $author->brief = $request->input('brief');


        $author->save();
        return redirect("authors");
    }

    public function delete($id)
    {
        Author::find($id)->delete();
        return redirect('authors');
    }

    public function edit($id)
    {
        $author = Author::find($id);
        return redirect('author.edit', compact("authors"));
    }

    public function  update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:10',

        ]);

        $author = new Author([
            'name' => $request->get('name'),
            'image' => $request->input('image'),
            'brief' => $request->input('brief'),
        ]);

        $author->save();
        return redirect("authors");
    }
}
