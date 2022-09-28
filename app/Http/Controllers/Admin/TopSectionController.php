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
//        dd($request->all());
       $data    = TopSection::insert([

           'title_one'      => $request->title_one,
           'title_two'      => $request->title_two,
           'description'    => $request->description,
//           'status'         => $request->status

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
        try {
            $data   = TopSection::destroy($id);

            return response()->json($data);

        }catch (\Exception $e){
            echo $e;
        }
    }
}
