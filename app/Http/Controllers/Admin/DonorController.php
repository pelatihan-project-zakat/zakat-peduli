<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Donor;

class DonorController extends Controller
{
    public function index()
    {
        $donors = Donor::first()->paginate(10);

        return view('admin.donor.index', [
            'donors'=>$donors]);
    }
}
