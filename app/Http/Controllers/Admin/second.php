<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class second extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showsecond1()
{
    return 'second';
}
    public function showsecond2()
    {
        return 'second2';
    }
}
