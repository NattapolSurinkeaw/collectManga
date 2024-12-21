<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function responseData($data) {
        if(!$data) {
            return response()->json([
                'status' => 'success',
                'message' => "data response not found"
            ], 400);
        }

        return response()->json([
            'status' => 'success',
            'data' => $data
        ], 200);
    }
}
