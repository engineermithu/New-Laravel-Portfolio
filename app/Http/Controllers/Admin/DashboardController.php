<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TopSection;
use App\Models\User;
use Illuminate\Http\Request;
use Sentinel;
use Illuminate\Support\Facades\Hash;
use App\Traits\MediaTraits;
use File;
class DashboardController extends Controller
{
    use MediaTraits;

   public function index(){
        return view('admin.dashboard');
   }

}
