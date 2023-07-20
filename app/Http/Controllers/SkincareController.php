<?php

namespace App\Http\Controllers;

use App\Models\Skincare;
use Illuminate\Http\Request;

class SkincareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Skincare::all();
        return view('skincare.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skincare.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Skincare::create([
            'produk_name' => $request->produk_name,
            'produk_jenis' => $request->produk_jenis,
            'produk_harga' => $request->produk_harga,
        ]);

        return redirect('skincare');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Skincare::findOrFail($id);
        return view('skincare.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Skincare::findOrFail($id);
        $row->update([
            'produk_name' => $request->produk_name,
            'produk_jenis' => $request->produk_jenis,
            'produk_harga' => $request->produk_harga,
        ]);

        return redirect('skincare');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Skincare::findOrFail($id);
        $row->delete();

        return redirect('skincare');
    }
}
