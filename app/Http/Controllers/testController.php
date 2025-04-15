<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function page1()
    {
        return view('backend.user.pages.page1');
    }
    public function page2()
    {
        return view('backend.user.pages.page2');
    }
}
