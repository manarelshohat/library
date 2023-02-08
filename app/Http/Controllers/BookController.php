<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::simplePaginate(6);
        return view('book.index', compact('books'));
    }
    public function create()
    {
        return view("book.create");
    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:30',
            'code' => 'required|max:5',
            'author_name' => 'required',
            'category_name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $book = new Book();
        $book->name = $request->input('name');
        $book->code = $request->input('code');
        $book->image = $request->input('image');
        $book->author_name = $request->input('author_name');
        $book->category_name = $request->input('category_name');
        $book->description = $request->input('description');
        $book->price = $request->input('price');
        $book->rate = $request->input('rate');
        $book->status = $request->input('status');

        $book->save();
        return redirect("books");
    }

    public function delete($id)
    {
        Book::find($id)->delete();
        return redirect('books');
    }

    public function edit($id)
    {
        $books = Book::find($id);
        return redirect('book.edit', compact("books"));
    }

    public function  update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:30',
            'code' => 'required|max:5',
            'author_name' => 'required',
            'category_name' => 'required',
            'description' => 'required',
            'price' => 'required',

        ]);

        $book = new Book([
            'name' => $request->get('name'),
            'code' => $request->input('code'),
            'author_name' => $request->input('author_name'),
            'category_name' => $request->input('category_name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'rate' => $request->input('rate'),
            'status' => $request->input('status'),
        ]);

        $book->save();
        return redirect("books");
    }
}
