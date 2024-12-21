<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class ApiController extends Controller
{
    //
    public function getManga() {
        $book = Book::all();
        return $this->responseData($book);
    }
}
