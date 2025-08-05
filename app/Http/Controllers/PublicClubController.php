<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicClubController extends Controller
{
    //
    public function index()
    {

        $clubs = Club::where('is_active', true)
                     ->orderBy('name', 'asc')
                     ->get(); 

        return view('public.clubs.index', compact('clubs'));
    }
}
