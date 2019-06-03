<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaction;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{

    public function index()
    {
        $transactions = DB::table('transactions')->where('status', '=', 0)->latest()->paginate(10);

        return view('admin.transaction.index', [
            'transactions'=>$transactions]);
    }

    public function success()
    {
        return view('admin.transaction.success');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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

    public function destroy($id)
    {
        //
    }
}
