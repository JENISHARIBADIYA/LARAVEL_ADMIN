<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // check for search input
        if(request('search')) {
            $data['categories'] = categories::where('cat_name', 'like', '%' .request('search') .'%')->get();
        }
        else{
            $data['categories'] = categories::all();
        }
        // $data['categories'] = Categories::all();
        return view('categories', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$data['categories'] = Categories::all();
        return view('category_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cat_name' => 'required|unique:categories|max:20',
            'cat_image' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('cat_add')
                ->withErrors($validator)
                ->withInput();
        }
        //Move Uploaded File
        $file = $request->file('cat_image');
        $destinationPath = 'uploads';
        $filePath = $file->storeAs('uploads', $file->getClientOriginalName(), 'public');
        $file->move($destinationPath, $file->getClientOriginalName());

        $newCat = new Categories();
        $newCat->cat_name = $request->input('cat_name');
        $newCat->cat_image = $filePath;
        $newCat->status = $request->input('status');
        $newCat->save();
        return redirect('/categories')->with('status', 'Data Saved Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currentCat = Categories::find($id);
        $data['current_cat'] = $currentCat;
        return view('category_view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['current_category'] = Categories::where('id', $id)->get();
        return view('category_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'cat_name' => 'required|max:20'
        ]);
        if ($validator->fails()) {
            return redirect('cat_edit')
                ->withErrors($validator)
                ->withInput();
        }

        $editCat = Categories::find($id);

        //Move Uploaded File
        $file = $request->file('cat_image');
        if (!is_null($file)) {
            $destinationPath = 'uploads';
            $filePath = $file->storeAs('uploads', $file->getClientOriginalName(), 'public');
            $file->move($destinationPath, $file->getClientOriginalName());
        } else {
            $filePath = $editCat->cat_image;
        }
        $editCat->cat_name = $request->input('cat_name');
        $editCat->cat_image = $filePath;
        $editCat->status = $request->input('status');
        $editCat->save();
        return redirect('/categories')->with('status', 'Data updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCat = Categories::find($id);
        $deleteCat->delete();
        return redirect('/categories')->with('status', 'Data delted Successfully.');
    }
}
