<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\_data_products;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TableProductsController extends Controller
{
    public function index()
    {
        $data = _data_products::all();
        return View('Admin.tableproducts', compact(["data"]));
    }
    public function create_perusahaan()
    {
        $data = _data_products::all();
        return View('Admin.CRUDproducts.createproducts', compact(["data"]));
    }
    public function store(Request $request)
    {
        $namaperusahaan = $request->input('namaperusahaan');
        $namaproducts = $request->input('namaproducts');
        $deskripsi = $request->input('deskripsi');
        $tanggalterbit = $request->input('tanggalterbit');

        $data = DB::table('data_products')
            ->insert([
                'namaperusahaan' => $namaperusahaan,
                'namaproducts' => $namaproducts,
                'deskripsi' => $deskripsi,
                'tanggalterbit' => $tanggalterbit,
            ]);
        $data = _data_products::all();
        return View('Admin.tableproducts', compact(["data"]));
    }
    public function edit($id)
    {
        $data = _data_products::find($id);
        return view('Admin.CRUDproducts.editproducts', compact(["data"]));
    }
    public function update($id, Request $request)
    {
        $namaperusahaan = $request->input('namaperusahaan');
        $namaproducts = $request->input('namaproducts');
        $deskripsi = $request->input('deskripsi');
        $tanggalterbit = $request->input('tanggalterbit');


        $data = _data_products::find($id);

        $data = DB::table('data_products')
            ->update([
                'namaperusahaan' => $namaperusahaan,
                'namaproducts' => $namaproducts,
                'deskripsi' => $deskripsi,
                'tanggalterbit' => $tanggalterbit,
            ]);
        $data = _data_products::all();
        return View('Admin.tableproducts', compact(["data"]));
    }
}
