<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        dd($request->except(['pj_lain', 'sb_lain']));
    }
}
