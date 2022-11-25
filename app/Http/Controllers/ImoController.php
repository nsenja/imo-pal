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
        $imos = DB::table('imos')->orderBy('id')->get();   
        $data = Imo::latest()->paginate(10);     
        // $data = Imo::latest()->paginate(10);
        return view('users.index',compact('imos','data'));
    }



    public function create()
    {
        return view('users.create', ['imos' => Imo::index()]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang'=>'required',
            'no_part'=>'required',
            'desc' => 'required',
            'asal_kirim'=>'required',
            'ekspedisi'=>'required',
            'status_kirim'=>'required',
        ]);
        $input = $request->all();
        Imo::create($input);
        return redirect()->route('users.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imo  $imo
     * @return \Illuminate\Http\Response
     */
    public function show(Imo $imos,$id)
    {
        $imos = Imo::where('id', $id)->first();
        $data = Imo::latest()->paginate(10);     
        // $data = Imo::latest()->paginate(10);
        return view('users.detail',compact('imos','data'));
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
