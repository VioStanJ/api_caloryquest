<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function init() {
        return response()->json(['success'=>true,'message'=>'init ...'], 200);
    }
}
