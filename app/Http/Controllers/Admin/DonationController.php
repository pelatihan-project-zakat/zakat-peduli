<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Donation;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donations = Donation::latest()->paginate(10);

        return view('admin.donations.index', [
            'donations' => $donations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.donations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Donation $donation)
    {

        $this->validate($request, [
            'nama_donasi' => 'required|min:5',
        ], [
            'required' => ':attribute Harus diisi'
        ]);

        $donation = new Donation();

        $donation->nama_donasi = $request->nama_donasi;
        $donation->keterangan = $request->keterangan;

        $donation->save();

        return redirect()->route('admin.donations.index')->with('succes', 'Berhasil ditambah');
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
    public function edit(Donation $donation)
    {
        // $donation = Donation::find($id);

        return view('admin.donations.edit', [
            'donation' => $donation,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        $this->validate($request, [
            'nama_donasi' => 'required|min:5',
        ], [
            'required' => ':atribute Harus diisi'
        ]);

        $donation->nama_donasi = $request->nama_donasi;
        $donation->keterangan = $request->keterangan;

        $donation->save();

        return redirect()->route('admin.donations.index')->with('warning', 'Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        $donation->delete();

        return redirect()->route('admin.donations.index')->with('danger', 'Berhasil Dihapus');
    }
}
