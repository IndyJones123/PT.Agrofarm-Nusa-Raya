<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\_data_perusahaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TablePerusahaanController extends Controller
{
    public function index()
    {
        $data = _data_perusahaan::all();
        return View('Admin.tableperusahaan', compact(["data"]));
    }
    public function create_perusahaan()
    {
        $data = _data_perusahaan::all();
        return View('Admin.CRUDperusahaan.createperusahaan', compact(["data"]));
    }
    public function store(Request $request)
    {
        $namaperusahaan = $request->input('namaperusahaan');
        $photobesar = $request->input('photobesar');
        $photokecil = $request->input('photokecil');
        $clients = $request->input('clients');
        $office = $request->input('office');
        $shortdeskripsi = $request->input('shortdeskripsi');
        $deskripsi = $request->input('deskripsi');
        $products = $request->input('products');
        $workers = $request->input('workers');
        $visi = $request->input('visi');
        $misi = $request->input('misi');

        if ($request->hasFile('photobesar')) {
            $path1 = $request->file('photobesar')->store('uploads');
            $path2 = $request->file('photokecil')->store('uploads');
        } else {
            $path1 = "";
            $path2 = "";
        }

        $data = DB::table('_data_perusahaan')
            ->insert([
                'namaperusahaan' => $namaperusahaan,
                'clients' => $clients,
                'office' => $office,
                'shortdeskripsi' => $shortdeskripsi,
                'deskripsi' => $deskripsi,
                'products' => $products,
                'workers' => $workers,
                'visi' => $visi,
                'misi' => $misi,
                'photobesar' => $path1,
                'photokecil' => $path2,
            ]);
        $data = _data_perusahaan::all();
        return View('Admin.tableperusahaan', compact(["data"]));
    }
    public function edit($id)
    {
        $data = _data_perusahaan::find($id);
        $perusahaan = [
            'id' => $id,
            'namaperusahaan' => $data->namaperusahaan,
            'clients' => $data->clients,
            'office' => $data->office,
            'shortdeskripsi' => $data->shortdeskripsi,
            'deskripsi' => $data->deskripsi,
            'products' => $data->products,
            'workers' => $data->workers,
            'visi' => $data->visi,
            'misi' => $data->misi,
            'photobesar' => $data->path1,
            'photokecil' => $data->path2,
        ];
        return view('Admin.CRUDperusahaan.editperusahaan', $perusahaan);
    }
    public function update($id, Request $request)
    {
        $namaperusahaan = $request->input('namaperusahaan');
        $photobesar = $request->input('photobesar');
        $photokecil = $request->input('photokecil');
        $clients = $request->input('clients');
        $office = $request->input('office');
        $shortdeskripsi = $request->input('shortdeskripsi');
        $deskripsi = $request->input('deskripsi');
        $products = $request->input('products');
        $workers = $request->input('workers');
        $visi = $request->input('visi');
        $misi = $request->input('misi');


        if ($request->hasFile('photobesar')) {
            $path1 = $request->file('photobesar')->store('uploads');
            $path2 = $request->file('photokecil')->store('uploads');
        } else {
            $path1 = "";
            $path2 = "";
        }

        $data = _data_perusahaan::find($id);
        $pathFoto1 = $data->photobesar;
        $pathFoto2 = $data->photokecil;
        if ($pathFoto1 != null || $pathFoto1 != '' && $pathFoto2 != null || $pathFoto2 != '') {
            Storage::delete($pathFoto1);
            Storage::delete($pathFoto2);
        }
        $data = _data_perusahaan::where('id', $id)
            ->update([
                'namaperusahaan' => $namaperusahaan,
                'clients' => $clients,
                'office' => $office,
                'shortdeskripsi' => $shortdeskripsi,
                'deskripsi' => $deskripsi,
                'products' => $products,
                'workers' => $workers,
                'visi' => $visi,
                'misi' => $misi,
                'photobesar' => $path1,
                'photokecil' => $path2,
            ]);
        $data = _data_perusahaan::all();
        return View('Admin.tableperusahaan', compact(["data"]));
    }
    public function delete($id)
    {
        $data = _data_perusahaan::find($id);
        $data->delete();
        $pathFoto = $data->photobesar;
        if ($pathFoto != null || $pathFoto != '') {
            Storage::delete($pathFoto);
        }
        $data = _data_perusahaan::all();
        return View('Admin.tableperusahaan', compact(["data"]));
    }
}
