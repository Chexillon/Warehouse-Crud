<?php

namespace App\Http\Controllers;
use App\Models\finished;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function finished()
    {
        $data = finished::orderBy('id', 'desc')->paginate(10);
        return view('information.finished')->with('data', $data);
    }

    public function wip()
    {
        $data = finished::orderBy('id', 'desc')->paginate(10);
        return view('information.wip')->with('data', $data);
    }

    public function raw()
    {
        $data = finished::orderBy('id', 'desc')->paginate(10);
        return view('information.raw')->with('data', $data);
    }
    
    public function child()
    {
        $data = finished::orderBy('id', 'desc')->paginate(10);
        return view('information.child')->with('data', $data);
    }

    public function akun()
    {
        $data = finished::orderBy('id', 'desc')->paginate(10);
        return view('akun.akun')->with('data', $data);
    }

    public function masuk()
    {
        $data = finished::orderBy('id', 'desc')->paginate(10);
        return view('laporan.Bmasuk')->with('data', $data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
