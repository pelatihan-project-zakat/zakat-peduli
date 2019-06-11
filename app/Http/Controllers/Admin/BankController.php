<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bank;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::latest()->paginate(10);

        return view('admin.banks.index', [
            'banks' => $banks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Bank $bank)
    {
        $this->validate($request, [
            'nama_bank' => 'required|min:3',
        ], [
            'required' => ':attribute Harus diisi'
        ]);

        $bank = new Bank();

        $bank->nama_bank = $request->nama_bank;

        $bank->save();

        return redirect()->route('admin.banks.index')->with('succes', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        return view('admin.banks.edit', [
            'bank' => $bank,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
        $this->validate($request, [
            'nama_bank' => 'required|min:3',
        ], [
            'required' => ':atribute Harus diisi'
        ]);

        $bank->nama_bank = $request->nama_bank;

        $bank->save();

        return redirect()->route('admin.banks.index')->with('warning', 'Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
        $bank->delete();

        return redirect()->route('admin.banks.index')->with('danger', 'Berhasil Dihapus');
    }
}
