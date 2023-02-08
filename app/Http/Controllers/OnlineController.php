<?php

namespace App\Http\Controllers;

use App\Models\Online;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OnlineController extends Controller
{
    public function index()
    {
        $onlines = Online::simplePaginate(1);
        return view("online.index", compact("onlines"));
    }
    public function create()
    {
        return view("online.create");
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:10',
            'image' => 'required',
            'description' => 'required|max:250',
            'author_name' => 'required',
            'category_name' => 'required',

        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $online = new Online();
        $online->name = $request->input('name');
        $online->image = $request->input('image');
        $online->description = $request->input('description');
        $online->author_name = $request->input('author_name');
        $online->category_name = $request->input('category_name');


        $online->save();
        return redirect("onlines");
    }

    public function delete($id)
    {
        Online::find($id)->delete();
        return redirect('onlines');
    }

    public function edit($id)
    {
        $onlines = Online::find($id);
        return redirect('online.edit', compact("onlines"));
    }

    public function  update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:10',
            'image' => 'required',
            'description' => 'required|max:250',
            'author_name' => 'required',
            'category_name' => 'required',

        ]);

        $online = new Online([
            'name' => $request->get('name'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'author_name' => $request->input('author_name'),
            'category_name' => $request->input('category_name'),
        ]);

        $online->save();
        return redirect("onlines");
    }
}
