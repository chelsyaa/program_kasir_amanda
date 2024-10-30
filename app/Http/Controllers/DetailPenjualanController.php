<?php

namespace App\Http\Controllers;
use App\Models\detailpenjualan;
use App\Models\produk;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $id_penjualan = $id;
        $detail_penjualan = detailpenjualan::where('id_penjualan',$id)->select('*')->get();

        return view('home.detail_penjualan.index', compact('id_penjualan','detail_penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $id_penjualan = $id;
        $id_menu = produk::all();
        return view('home.detail_penjualan.tambah',compact('id_penjualan','id_menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DetailPenjualan::create([
            'id_penjualan' => $request->id_penjualan,
            'id_menu' => $request->id_menu,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'subtotal' => $request->subtotal,
        ]);
        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail_penjualan = DetailPenjualan::find($id);
        return view('home.detail_penjualan.edit', compact('detail_penjualan'));
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
        $detail_penjualan = DetailPenjualan::find($id);
        $detail_penjualan->update([
            'id_penjualan' => $request->id_penjualan,
            'id_menu' => $request->id_menu,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'subtotal' => $request->subtotal,
        ]);
        return redirect('/detail_penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail_penjualan = DetailPenjualan::find($id);
        $detail_penjualan->delete();
        return redirect('/penjualan');
    }
  
}
