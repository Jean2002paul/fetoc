<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BureauMember;

class PublicBureauController extends Controller
{
    //
    public function index()
    {
        $members = BureauMember::orderBy('order', 'asc')->get();
        return view('public.bureau.index', compact('members'));
    }
}
