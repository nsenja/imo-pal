<?php

namespace App\Http\Controllers;

use App\Models\Imo;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    
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
     * @param  \App\Models\Imo  $imo
     * @return \Illuminate\Http\Response
     */
    public function show(Imo $imo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imo  $imo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imo $imo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imo  $imo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imo $imo)
    {
        //
    }
}
