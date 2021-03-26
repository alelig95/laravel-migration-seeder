<?php

namespace App\Http\Controllers\Api;
use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getFirstBook() {

        $firstBook = Book::orderBy('id', 'asc')->first();

        return response()->json($firstBook);
    }
}
