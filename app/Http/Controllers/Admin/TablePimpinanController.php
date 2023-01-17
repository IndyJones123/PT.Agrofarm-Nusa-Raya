<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\data_pimpinan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $photo = $request->input('photo');

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads');
        } else {
            $path = "";
        }

        $data = DB::table('data_pimpinan')
            ->insert([
                'namaperusahaan' => $namaperusahaan,
                'namapimpinan' => $namapimpinan,
                'gelar' => $gelar,
                'photo' => $path,
            ]);

        $data = data_pimpinan::all();
        return View('Admin.tablepimpinan', compact(["data"]));
    }
    public function edit($id)
    {
        $data = data_pimpinan::find($id);
        $pimpinan = [
            'id' => $id,
            'namaperusahaan' => $data->namaperusahaan,
            'namapimpinan' => $data->namapimpinan,
            'gelar' => $data->gelar,
            'photo' => $data->photo,
        ];
        return view('Admin.CRUDpimpinan.editpimpinan', $pimpinan);
    }
    public function update($id, Request $request)
    {
        $namaperusahaan = $request->input('namaperusahaan');
        $namapimpinan = $request->input('namapimpinan');
        $gelar = $request->input('gelar');
        $photo = $request->input('photo');

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads');
        } else {
            $path = "";
        }

        $data = data_pimpinan::find($id);
        $pathFoto = $data->photo;
        if ($pathFoto != null || $pathFoto != '') {
            Storage::delete($pathFoto);
        }
        $data = data_pimpinan::where('id', $id)
            ->update([
                'namaperusahaan' => $namaperusahaan,
                'namapimpinan' => $namapimpinan,
                'gelar' => $gelar,
                'photo' => $path,
            ]);
        $data = data_pimpinan::all();
        return View('Admin.tablepimpinan', compact(["data"]));
    }
    public function delete($id)
    {
        $data = data_pimpinan::find($id);
        $pathFoto = $data->photo;
        if ($pathFoto != null || $pathFoto != '') {
            Storage::delete($pathFoto);
        }
        $data->delete();
        $data = data_pimpinan::all();
        return View('Admin.tablepimpinan', compact(["data"]));
    }
}
