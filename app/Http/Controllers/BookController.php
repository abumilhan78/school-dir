<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
    public function index()
    {
    	$quer = Book::all();
    	return view('buku', compact('quer'));
    }
}
