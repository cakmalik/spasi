<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function members()
    {
        $members = Member::latest()->paginate(20);
        return view('admin.memberTable',compact('members'));
    }
}
