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
        $top_sections = $this->top_section->show();
        return view('admin.top-section.index',compact('top_sections'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
//        dd($request->all());
        $data = $this->top_section->store($request);
        return response()->json(['s'=>$data]);
    }


    public function show()
    {
        $top_sections = $this->top_section->show();
//        dd($top_sections);
        return view('admin.top-section.index',compact('top_sections'));
//        return response()->json($data);
    }


    public function edit($id)
    {

        $data = $this->top_section->edit($id);

//        return response()->json(['data'=>$data]);
           return view('admin.top-section.index',compact('data'));
//        return view('admin.top-section.index',['data' =>TopSection::find($id)]);
    }


    public function updated(Request $request, $id_protfolio)
    {
        $data = $this->top_section->update($request,$id_protfolio);
        return response()->json($data);
    }


    public function destroy($id)
    {
        $data = $this->top_section->destroy($id);
        return redirect()->route('top.section')->with(['status'=>'success']);
    }
}
