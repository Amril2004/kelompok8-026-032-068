<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Program;
use App\Models\News;
use App\Models\Category;
use App\Models\ProgramImage;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        return view('user.home-page',[

        ]);
    }
}
