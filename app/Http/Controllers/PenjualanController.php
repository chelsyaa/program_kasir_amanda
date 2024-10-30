<?php

namespace App\Http\Controllers;
use App\Models\penjualan;
use App\Models\DetailPenjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('home.penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.penjualan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        penjualan::create([
            'no' => $request->no,
            'nama_customer' => $request->nama_customer,
            'total' => $request->total,
            'tanggal_transaksi' => $request->tanggal_transaksi,
        ]);
        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penjualan = Penjualan::find($id);
        return view('home.penjualan.edit', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->update([
            'no' => $request->no,
            'nama_customer' => $request->nama_customer,
            'total' => $request->total,
            'tanggal_transaksi' => $request->tanggal_transaksi,

        ]);
        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return redirect('/penjualan');
    }
    public function struk($id)
    {
        $penjualan = DetailPenjualan::find($id);
            return view('home.penjualan.struk', compact('penjualan'));
    }
}
