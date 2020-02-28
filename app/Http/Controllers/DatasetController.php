<?php

namespace App\Http\Controllers;

use Storage;
use App\Category;
use App\Dataset;
use Illuminate\Http\Request;

class DatasetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasets = Dataset::all();
        return view('datasets.index', compact('datasets'));
    }

    public function download($filename)
    {
        // return response()->download(storage_path('/app/files/'. $file));
        return Storage::download('datasets/'.$filename);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('datasets.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required',
            'dataset' => 'required|mimes:zip'
            ]);
            // return $request;
            $dataset = new Dataset;
            $dataset->name = $request->name;
            $dataset->category_id = $request->category_id;
            $dataset->user_id = auth()->user()->id;
            
            $datafile =$request->file('dataset');
            $filename = time().'.'.$datafile->getClientOriginalExtension();
            
            // Storage::disk('public')->put("datasets/".$filename, $datafile);
            $request->file('dataset')->storeAs('public/datasets/', $filename);

            $dataset->file = $filename;

            $dataset->save();

            return redirect('/datasets');
        // $dataset->file = $request->name;
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function show(Dataset $dataset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataset $dataset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataset $dataset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataset $dataset)
    {
        //
    }
}
