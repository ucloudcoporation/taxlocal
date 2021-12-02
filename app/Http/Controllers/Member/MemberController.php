<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        return view('member.login.index');
    }
}
