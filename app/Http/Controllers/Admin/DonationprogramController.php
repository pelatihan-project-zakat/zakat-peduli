<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Donationprogram;

class DonationprogramController extends Controller
{
    public function index()
    {
        $programs = Donationprogram::latest()->paginate(10);

        return view('admin.program.index', [
            'programs'=>$programs]);
    }

    public function create()
    {
        return view('admin.program.create');
    }

    public function store(Request $request)
    {
        $program = new Donationprogram();

        $program->program_name = $request->nama_program;
        $program->donation_id = $request->jenis_program;
        $program->keterangan = $request->keterangan;
        $program->save();

        return redirect()->route('program.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Donationprogram $program)
    {
        return view('admin.program.edit',[
            'program' => $program,
        ]);
    }

    public function update(Request $request, Donationprogram $program)
    {
        $program->program_name = $request->nama_program;
        $program->donation_id = $request->jenis_program;
        $program->keterangan = $request->keterangan;
        $program->save();

        return redirect()->route('program.index');
    }

    public function destroy(Donationprogram $program)
    {
        $program->delete();

        return redirect()->route('program.index');
    }
}
