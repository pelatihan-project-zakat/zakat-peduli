<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Donationcategory;

class DonationcategoryController extends Controller
{
    public function index()
    {
        $categories = Donationcategory::latest()->paginate(5);

        return view('admin.category', [
            'categories'=>$categories]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $category = new Donationcategory();

        $category->donation_name = $request->donation_name;
        $category->save();

        return redirect()->route('category.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Donationcategory $category)
    {
        $category->delete();

        return redirect()->route('category.index');
    }
}
