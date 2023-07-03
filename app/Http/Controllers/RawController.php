<?php

namespace App\Http\Controllers;

use App\Models\raw;
use Illuminate\Http\Request;

class RawController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data = raw::orderBy('id','desc')->paginate(10);
        return view('raw.incoming')->with('data', $data);
    }

    public function outgoing()
    {
        
        $data = raw::orderBy('id','desc')->paginate(10);
        return view('raw.outgoing')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('raw.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|max:20',
            'nama_supplier' => 'required|max:20',
            'jumlah' => 'required'
        ], [
            'nama_barang.required' => 'Nama Barang wajib diisi',
            'nama_supplier.required' => 'Nama supplier wajib diisi',
            'jumlah.required' => 'Jumlah wajib diisi',



        ]);

        $data = [
            'nama_barang' => $request->nama_barang,
            'nama_supplier' => $request->nama_supplier,
            'jumlah' => $request->jumlah,
        ];
        raw::create($data);
        return redirect()->to('raw')->with('success','Berhasil menambahkan data');
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
        $data = raw::where('id', $id)->first();
        return view ('raw.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_barang' => 'required|max:20',
            'nama_supplier' => 'required|max:20',
            'jumlah' => 'required'
        ], [
            'nama_barang.required' => 'Nama Barang wajib diisi',
            'nama_supplier.required' => 'Nama supplier wajib diisi',
            'jumlah.required' => 'Jumlah wajib diisi',



        ]);

        $data = [
            'nama_barang' => $request->nama_barang,
            'nama_supplier' => $request->nama_supplier,
            'jumlah' => $request->jumlah,
        ];
        raw::where('id', $id)->update($data);
        return redirect()->to('raw')->with('success','Berhasil melakukan update data data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        raw::where('id', $id)->delete();
        return redirect()->to('raw')->with('success', 'Berhasil melakukan delete data');
    }
}
