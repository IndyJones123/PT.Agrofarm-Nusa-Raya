<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\_data_perusahaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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
        $clients = $request->input('clients');
        $office = $request->input('office');
        $shortdeskripsi = $request->input('shortdeskripsi');
        $deskripsi = $request->input('deskripsi');
        $products = $request->input('products');
        $workers = $request->input('workers');
        $visi = $request->input('visi');
        $misi = $request->input('misi');

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
            ]);
        return View('Admin.home', compact(["data"]));
    }
}
