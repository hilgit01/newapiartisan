<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelian = Pembelian::all();
    return view('pembelian', ["pembelian" => $pembelian]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {       
    return view("pembelian.create");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Pembelian::create([
    //     "produk" => $request->produk,
    //     "no" => $request->no,
    //     "harga" => 10000,
    //     "jumlah" => $request->jumlah,
    //     "total_harga" => $request->harga*$request->jumlah
    // ]);

    $harga = 0; // Default harga

    if ($request->produk == 'Kerang Dara') {
        $harga = 65000;
    } elseif ($request->produk == 'Cumi-Cumi') {
        $harga = 57000;
    } elseif ($request->produk == 'Kepiting') {
        $harga = 60000;
    } elseif ($request->produk == 'Udang') {
        $harga = 35000;
    }
    
    Pembelian::create([
        "produk" => $request->produk,
        "harga" => $harga,
        "jumlah" => $request->jumlah,
        "total_harga" => $harga * $request->jumlah
    ]);
    


    return redirect()->route("pembelian.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $pembelian = Pembelian::find($id);
    return view("edit", ["pembelian" => $pembelian]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $harga = 0; // Default harga

    if ($request->produk == 'Kerang Dara') {
        $harga = 65000;
    } elseif ($request->produk == 'Cumi-Cumi') {
        $harga = 57000;
    } elseif ($request->produk == 'Kepiting') {
        $harga = 60000;
    } elseif ($request->produk == 'Udang') {
        $harga = 35000;
    }
    
    Pembelian::find($id)->update([
        "produk" => $request->produk,
        "harga" => $harga,
        "jumlah" => $request->jumlah,
        "total_harga" => $harga * $request->jumlah
    ]);
    
        return redirect()->route("pembelian.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pembelian::find($id)->delete();

    return redirect()->route("pembelian.index");
    }
}
