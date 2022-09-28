<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\TopSection;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){

        $topSections = TopSection::where('status',1)->get();
        return view('home',compact('topSections'));
    }
}
