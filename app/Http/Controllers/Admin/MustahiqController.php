<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mustahiq;

class MustahiqController extends Controller
{
    public function index()
    {
        $mustahiqs = Mustahiq::latest()->paginate(10);

        return view('admin.mustahiq.index', [
            'mustahiqs'=>$mustahiqs]);
    }

    public function create()
    {
        return view('admin.mustahiq.create');
    }

    public function store(Request $request)
    {
        $mustahiq = new Mustahiq();

        $mustahiq->mustahiq_name = $request->name;
        $mustahiq->mustahiq_address = $request->address;
        $mustahiq->save();

        return redirect()->route('mustahiq.index');        
    }

    public function show($id)
    {
        //
    }

    public function edit(Mustahiq $mustahiq)
    {
        return view('admin.mustahiq.edit',[
            'mustahiq' => $mustahiq,
        ]);
    }

    public function update(Request $request, Mustahiq $mustahiq)
    {
        $mustahiq->mustahiq_name = $request->name;
        $mustahiq->mustahiq_address = $request->address;
        $mustahiq->save();

        return redirect()->route('mustahiq.index');
    }

    public function destroy(Mustahiq $mustahiq)
    {
        $mustahiq->delete();

        return redirect()->route('mustahiq.index');
    }
}
