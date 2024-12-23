<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BillBookPurchaseReceipt;

class ApiController extends Controller
{
    //book
    public function getBookAll() {
        $book = Book::all();
        return $this->responseData($book);
    }

    // payments
    public function getSlipPayment() {
        $payment = BillBookPurchaseReceipt::all();
        return $this->responseData($payment);
    }
}
