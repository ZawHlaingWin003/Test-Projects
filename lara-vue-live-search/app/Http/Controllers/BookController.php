<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getBooks(Request $request)
    {
        $data = Book::where('name', 'LIKE', '%'.$request->keyword.'%')->get();
        return response()->json($data);
    }
}
