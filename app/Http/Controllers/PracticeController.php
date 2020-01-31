<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
    	$data = "Mochammad Qaysa al-Haq";
    	return view('web', compact('data'));
    }

    public function pass1()
    {
    	$siswa = [
    		['nama'=>'Kasman', 'kelas'=>'RPL'],
    		['nama'=>'Kisman', 'kelas'=>'RPL']
    	];

    	return view('latihan1', ['siswa'=> $siswa ]);
    }
}
