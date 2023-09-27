<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pernyataan;
use Carbon\Carbon;
use App\Models\Hasil_Tes;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $currentDate = Carbon::today();
        $userIds = array();
        $todayUsers = array();
        // $datas = Hasil_Tes::where('created_at', '>', $currentDate)->get();
        $datas =  DB::table('hasil__tes')->select('user_id')->where('created_at', '>', $currentDate)->distinct('user_id')->get();
        foreach ($datas as $key => $value) {
            $userIds[] = $value->user_id;
        }

        foreach ($userIds as $key => $id) {
            $todayUsers[] = Hasil_Tes::join('users', 'users.id', '=', 'hasil__tes.user_id')->select('hasil__tes.*', 'users.nama')->where('hasil__tes.created_at', '>', $currentDate)->where('hasil__tes.user_id', '=', $id)->latest()->first();
        }

        // dd($todayUsers);
        return view('admin.admin',[
            'todayUsers' => $todayUsers
        ]);
    }

    public function pernyataan(){
        $pernyataans = Pernyataan::all();
        return view('admin.pernyataan', [
            'pernyataans' => $pernyataans,
        ]);
    }

}

