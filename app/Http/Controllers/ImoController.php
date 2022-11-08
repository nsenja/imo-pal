<?php

namespace App\Http\Controllers;

use App\Models\Imo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $imo = Imo::all();
        $imo = DB::table('imo')->select('imo','description')->get();
        // $data = Imo::latest()->paginate(10);
        return view('users.index')->with('imo',$imo);
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
