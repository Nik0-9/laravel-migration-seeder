<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class HomeController extends Controller
{
    public function index()
    {
        $books = Book::all();
        //dd($books);
        return view("home", compact('books'));
    }
    //show è per leggere il dettaglio di un solo prodotto
    public function show($id){

    }
}
