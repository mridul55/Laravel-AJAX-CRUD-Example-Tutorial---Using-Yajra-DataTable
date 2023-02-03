<?php

namespace App\Http\Controllers;
//use DataTables;

use Yajra\DataTables\Facades\DataTables;
use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        $cats = Cat::select('id','name','type')->get();

            if($request->ajax()){
              return DataTables::of($cats)
                ->addColumn('action', function($row) {
                  return '<a href="javascript:void(0)" class="btn-sm btn btn btn-info editButton"  data-id="'.$row->id.'">Edit</a>
                  <a href="javascript:void(0)" class="btn-sm btn btn btn-danger delBtn"  data-id="'.$row->id.'">Del</a>
                  ';
                })
                // ->addColumn('action', function ($cats) {
				// 	return view('cat.action', compact('cats'));
				// })
                ->rawColumns(['action'])
                ->make(true);
            }
        
        return view('cat.index');
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->cat_id != null){
            $category = Cat::find($request->cat_id);
            if(! $category){
                abort(404);
            }
            $category->update([
                'name' => $request->name,
                'type' => $request->type
            ]);
            return response()->json([
                'success'=> 'Category Updated Successfully '
            ],201);
        }
        else {
            $request->validate([
                'name' => 'required|min:2|max:30',
                'type' => 'required',
     
            ]);
            Cat::create([
                'name' => $request->name,
                'type' => $request->type,
    
            ]);
    
            return response()->json([
                'success'=> 'Category saved Successfully '
            ],201);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(Cat $cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $category = Cat::find($id);
       if(!$category){
          abort(404);
       }
       return $category;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cat $cat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Cat::find($id); 
       if(!$category){
          abort(404);
       }
       $category->delete();
       return response()->json(['success'=> 'Category Deleted Succesfully'],201);
    }
}
