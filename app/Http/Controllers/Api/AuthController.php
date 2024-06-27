<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\SendOTP;
use Illuminate\Http\Request;
use App\Models\LoginOtp;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function signWithEmail(Request $request) {

        $request->validate([
            'email'=>'required'
        ]);

        Mail::to($request->email)->send(new SendOTP(createOtp(6)));

        return response()->json([$request->all()], 200);
    }
}
