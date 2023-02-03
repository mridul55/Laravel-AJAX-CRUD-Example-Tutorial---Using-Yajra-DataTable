<?php

namespace App\Http\Controllers;

use App\Models\Pactrice;
use Illuminate\Http\Request;

class PactriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('test.pactrice');
        //return view('test.alignment'); 
       // return view('test.fixed_position'); 
       //return view('test.colors_background');
       //return view('test.margin_padding');
       //return view('test.width_height');
       //return view('test.media_queries'); 
       //return view('test.button_group');
       //return view('test.list_group_badges');
       // return view('test.form_input');
       //return view('test.input_group');
       //return view('test.table');
      // return view('test.cards');
       //return view('test.media');
       //return view('test.grid_alignment');
       return view('test.flex_box');










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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pactrice  $pactrice
     * @return \Illuminate\Http\Response
     */
    public function show(Pactrice $pactrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pactrice  $pactrice
     * @return \Illuminate\Http\Response
     */
    public function edit(Pactrice $pactrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pactrice  $pactrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pactrice $pactrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pactrice  $pactrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pactrice $pactrice)
    {
        //
    }
}
