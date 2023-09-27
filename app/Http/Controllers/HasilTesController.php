<?php

namespace App\Http\Controllers;

use App\Models\Pernyataan;
use App\Models\Hasil_Tes;
use App\Models\Detail_Hasiltes;
use App\Http\Requests\StoreHasil_TesRequest;
use App\Http\Requests\UpdateHasil_TesRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HasilTesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHasil_TesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = array();
        for ($i=0; $i <= 10; $i++) {
            if ($request->input('pernyataan'.$i)) {
                array_push($data, $request->input('pernyataan'.$i));
            }
        }
        // dd($data);

        $pernyataans = Pernyataan::where('status','=',1)->get();
        $totalpoin = 0;
        foreach ($pernyataans as $key => $p) {
            for ($i=0; $i < count($data); $i++) {
                if($data[$i] == $p->pernyataan) {
                    $totalpoin += $p->poin;
                }
            }
        }

        if ($totalpoin <= 5) {
            $hasil = 'Clinical Depression';
        } else {
            $hasil = 'Mild Anxiety';
        }
        // dd($totalpoin);

        if(Auth::user()){
            Hasil_Tes::create([
                'hasil' => $hasil,
                'totalpoin' => $totalpoin,
                'user_id' => Auth::user()->id,
            ]);

            $hasiltes = Hasil_Tes::latest()->first();
            // dd($hasiltes);
            foreach ($pernyataans as $key => $p) {
                for ($i=0; $i < count($data); $i++) {
                    if ($data[$i] == $p->pernyataan) {
                        $hasiltes->pernyataans()->attach($p->id);
                    }
                }
            }

            return view('user.hasiltest',[
                'pernyataans' => $data,
                'hasiltes' => $hasiltes
            ]);

        } else {
            session([
                'hasil' => $hasil,
                'totalpoin' => $totalpoin,
            ]);

            return view('user.hasiltest',[
                'pernyataans' => $data,
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hasil_Tes  $hasil_Tes
     * @return \Illuminate\Http\Response
     */
    public function show(Hasil_Tes $hasil_Tes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hasil_Tes  $hasil_Tes
     * @return \Illuminate\Http\Response
     */
    public function edit(Hasil_Tes $hasil_Tes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHasil_TesRequest  $request
     * @param  \App\Models\Hasil_Tes  $hasil_Tes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHasil_TesRequest $request, Hasil_Tes $hasil_Tes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hasil_Tes  $hasil_Tes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hasil_Tes $hasil_Tes)
    {
        //
    }
}
