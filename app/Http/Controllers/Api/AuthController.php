<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\SendOTP;
use Illuminate\Http\Request;
use App\Models\LoginOtp;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function signWithEmail(Request $request) {

        $request->validate([
            'email'=>'required'
        ]);

        $otp = createOtp(6);

        LoginOtp::create([
            'email'=>$request->email,
            'otp'=>$otp,
            'expired_date'=>Carbon::now()->addMinutes(5)
        ]);

        Mail::to($request->email)->send(new SendOTP($otp));

        return response()->json(['success'=>true,'message'=>__('messages.otp_sent')], 200);
    }
}
