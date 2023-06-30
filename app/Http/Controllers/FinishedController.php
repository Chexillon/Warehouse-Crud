<?php

namespace App\Http\Controllers;

use App\Models\finished;
use Illuminate\Http\Request;

class FinishedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = finished::orderBy('id','desc')->paginate(10);
        return view('finished.finished')->with('data', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('finished.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'nama_barang' => 'required|max:20',
            'kode_barang' => 'required|max:20|unique:finished,kode_barang',
            'nama_customer' => 'required|max:20',
            'tanggal' => 'required',
            'jumlah' => 'required'
        ], [
            'nama_barang.required' => 'Nama Barang wajib diisi',
            'kode_barang.required' => 'Kode Barang wajib diisi',
            'kode_barang.unique' => 'Kode Barang sudah ada di di dalam database',
            'nama_customer.required' => 'Nama Customer wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
            'jumlah.required' => 'Jumlah wajib diisi',



        ]);

        $data = [
            'nama_barang' => $request->nama_barang,
            'kode_barang' => $request->kode_barang,
            'nama_customer' => $request->nama_customer,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
        ];
        finished::create($data);
        return redirect()->to('finished')->with('success','Berhasil menambahkan data');
        //
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
        $data = finished::where('id', $id)->first();
        return view ('finished.edit')->with('data', $data);
     
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_barang' => 'required|max:20',
            'kode_barang' => 'required|max:20',
            'nama_customer' => 'required|max:20',
            'tanggal' => 'required',
            'jumlah' => 'required'
        ], [
            'nama_barang.reqiured' => 'Nama Barang wajib diisi',
            'kode_barang.reqiured' => 'Kode Barang wajib diisi',
            'nama_customer.reqiured' => 'Nama Customer wajib diisi',
            'tanggal.reqiured' => 'Tanggal wajib diisi',
            'jumlah.reqiured' => 'Jumlah wajib diisi',



        ]);

        $data = [
            'nama_barang' => $request->nama_barang,
            'kode_barang' => $request->kode_barang,
            'nama_customer' => $request->nama_customer,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
        ];
        finished::where('id', $id)->update($data);
        return redirect()->to('finished')->with('success','Berhasil melakukan update data data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        finished::where('id', $id)->delete();
        return redirect()->to('finished')->with('success', 'Berhasil melakukan delete data');
    }
}
