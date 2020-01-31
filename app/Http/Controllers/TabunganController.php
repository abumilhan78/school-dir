<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabungan = Tabungan::all()->take(10);
        return view('tabung', compact('tabungan'));
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
    public function store($nis,$nm,$kls,$jml)
    {
        $tab = new Tabungan;
        $tab->nis = $nis;
        $tab->nama = $nm;
        $tab->kelas = $kls;
        $tab->jml = $jml;

        $tab->save();
        return $tab;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tabungan = Tabungan::find($id);
        return $tabungan;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$nis,$nm,$kls,$jml)
    {
        $tabungan = Tabungan::find($id);
        $tabungan->nis = $nis;
        $tabungan->nama = $nm;
        $tabungan->kelas = $kls;
        $tabungan->jml = $jml;

        $tabungan->save();
        return $tabungan;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
