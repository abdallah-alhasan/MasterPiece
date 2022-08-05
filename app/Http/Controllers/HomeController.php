<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $latest = Trade::orderBy('created_at', 'DESC')->limit(10)->get();
        $gamesOfTheMonth = Trade::orderBy('title', 'DESC')->limit(10)->get();
        return view('pages.home', compact('latest', 'gamesOfTheMonth'));
    }
}
