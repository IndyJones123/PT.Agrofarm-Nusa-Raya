<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\data_pimpinan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TablePimpinanController extends Controller
{
    public function index()
    {
        $data = data_pimpinan::all();
        return View('Admin.tablepimpinan', compact(["data"]));
    }
    public function create_perusahaan()
    {
        $data = data_pimpinan::all();
        return View('Admin.CRUDpimpinan.createpimpinan', compact(["data"]));
    }
    public function store(Request $request)
    {
        $namaperusahaan = $request->input('namaperusahaan');
        $namapimpinan = $request->input('namapimpinan');
        $gelar = $request->input('gelar');

        $data = DB::table('data_pimpinan')
            ->insert([
                'namaperusahaan' => $namaperusahaan,
                'namapimpinan' => $namapimpinan,
                'gelar' => $gelar,
            ]);
        $data = data_pimpinan::all();
        return View('Admin.tablepimpinan', compact(["data"]));
    }
    public function edit($id)
    {
        $data = data_pimpinan::find($id);
        return view('Admin.CRUDpimpinan.editpimpinan', compact(["data"]));
    }
    public function update($id, Request $request)
    {
        $namaperusahaan = $request->input('namaperusahaan');
        $namapimpinan = $request->input('namapimpinan');
        $gelar = $request->input('gelar');


        $data = data_pimpinan::find($id);

        $data->update([
            'namaperusahaan' => $namaperusahaan,
            'namapimpinan' => $namapimpinan,
            'gelar' => $gelar,
        ]);
        $data = data_pimpinan::all();
        return View('Admin.tablepimpinan', compact(["data"]));
    }
}
