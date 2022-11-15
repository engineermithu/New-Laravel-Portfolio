<?php

namespace App\Repositories\Admin;

use App\Models\TopSection;
use App\Repositories\Interfaces\Admin\TopSectionInterface;

class TopSectionRepository implements TopSectionInterface
{
    public function store($request)
    {
        try {
            TopSection::insert([
                'title_one'      => $request->title_one,
                'title_two'      => $request->title_two,
                'description'    => $request->description,
                'status'         => $request->status,
//          'status'         => $request->status
            ]);
        }catch (\Exception $e){
            echo $e;
        }
    }

    public function show()
    {
        try {
            return TopSection::latest()->get();
        }catch (\Exception $e){
            echo $e;
        }
    }

    public function edit($id)
    {
        try {
            return TopSection::find($id);
        }catch (\Exception $e){
            echo $e;
        }
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

    public function update($request,$id_protfolio)
    {
//        dd($request->all());
        try {
             TopSection::findOrFail($id_protfolio)->update([
                'title_one'      => $request->title_one,
                'title_two'      => $request->title_two,
                'description'    => $request->description,
                 'status'        => $request->status,
            ]);
        }catch (\Exception $e){
            echo $e;
        }
    }
}
