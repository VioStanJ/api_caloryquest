<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signWithEmail(Request $request) {
        return response()->json([$request->all()], 200);
    }
}
