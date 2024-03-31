<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['public']]);
    }
    public function sample() {
        return 'From sample';
    }
    public function public() {
        return 'From public';
    }
}
