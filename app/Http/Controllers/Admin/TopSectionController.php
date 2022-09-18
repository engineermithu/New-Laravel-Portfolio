<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TopSection;
use Illuminate\Http\Request;

class TopSectionController extends Controller
{

    public function index()
    {
        return view('admin.top-section.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
       $data    = TopSection::insert([

           'title'          => $request->title,
           'description'    => $request->description,
           'status'         => $request->status

       ]);
        return response()->json($data);
    }


    public function show()
    {
        $data = TopSection::all();
        return response()->json($data);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
