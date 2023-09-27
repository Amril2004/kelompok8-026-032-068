<?php

namespace App\Http\Controllers;

use App\Models\Pernyataan;
use App\Http\Requests\StorePernyataanRequest;
use App\Http\Requests\UpdatePernyataanRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PernyataanController extends Controller
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
     * @param  \App\Http\Requests\StorePernyataanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'pernyataan' => ['required'],
            'poin' => ['required'],
            'status' => ['required'],
        ]);

        Pernyataan::create($validated);
        
        return redirect('/pernyataan')->with('tambah', 'Pernyataan baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pernyataan  $pernyataan
     * @return \Illuminate\Http\Response
     */
    public function show(Pernyataan $pernyataan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pernyataan  $pernyataan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pernyataan $pernyataan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePernyataanRequest  $request
     * @param  \App\Models\Pernyataan  $pernyataan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'pernyataan' => ['required'],
            'poin' => ['required'],
            'status' => ['required'],
        ]);

        $pernyataan = Pernyataan::find($id);
        $pernyataan->update($validated);

        return redirect('/pernyataan')->with('ubah', 'Pernyataan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pernyataan  $pernyataan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $pernyataan = Pernyataan::find($id);
        $pernyataan->delete();

        return redirect('/pernyataan')->with('delete', 'Pernyataan berhasil dihapus');
    }
}
