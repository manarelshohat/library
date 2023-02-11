<?php

namespace App\Http\Controllers;

use App\Models\Borrowed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BorrowedController extends Controller
{

    public function index()
    {
        $borrows = Borrowed::all();
        return view("borrow.index", compact('borrows'));
    }

    public function create()
    {
        return view("borrow.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'register_name' => 'required|max:30',
            'book_id' => 'required',
            'borrow_date' => 'required',
            'return_date' => 'required'

        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }


        $borrow = new Borrowed();

        $borrow->register_name = $request->input('register_name');
        $borrow->book_id = $request->input('book_id');
        $borrow->borrow_date = $request->input('borrow_date');
        $borrow->return_date = $request->input('return_date');


        $borrow->save();
        return redirect("borrows");
    }

    public function delete($id)
    {
        Borrowed::find($id)->delete();
        return redirect('borrows');
    }

    public function edit($id)
    {
        $borrow = Borrowed::find($id);
        return view('borrow.edit', compact("borrow"));
    }

    public function  update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:30',
            'book_id' => 'required',
            'borrow_date' => 'required',
            'return_date' => 'required'

        ]);

        $borrow = new Borrowed([
            'register_name' => $request->get('register_name'),
            'book_id' => $request->input('book_id'),
            'borrow_date' =>  $request->input('borrow_date'),
            'return_date' => $request->input('return_date')
        ]);

        $borrow->save();
        return redirect("borrows");
    }
}