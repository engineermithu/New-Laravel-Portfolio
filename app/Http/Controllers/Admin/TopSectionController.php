<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TopSection;
use App\Repositories\Interfaces\Admin\TopSectionInterface;
use Illuminate\Http\Request;

class TopSectionController extends Controller
{

    protected $top_section;

    public function __construct(TopSectionInterface $top_section){

        $this->top_section = $top_section;
    }

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
        $data = $this->top_section->store($request);
        return response()->json($data);
    }


    public function show()
    {
        $data = $this->top_section->show();
        return response()->json($data);
    }


    public function edit($id)
    {
        $data = $this->top_section->edit($id);
        return response()->json($data);
//           return view('admin.top-section.index',compact('data'));
//        return view('admin.top-section.index',['data' =>TopSection::find($id)]);
    }


    public function update(Request $request, $id)
    {
        $data = $this->top_section->update($request,$id);
        return response()->json($data);
    }


    public function destroy($id)
    {
        $data = $this->top_section->destroy($id);
        return response()->json($data);
    }
}
