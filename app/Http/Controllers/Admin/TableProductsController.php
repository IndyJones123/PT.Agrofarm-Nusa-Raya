<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\_data_products;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $jenisproducts = $request->input('jenisproducts');
        $deskripsi = $request->input('deskripsi');
        $tanggalterbit = $request->input('tanggalterbit');
        $photo = $request->input('photo');

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads');
        } else {
            $path = "";
        }

        $data = DB::table('data_products')
            ->insert([
                'namaperusahaan' => $namaperusahaan,
                'namaproducts' => $namaproducts,
                'jenisproducts' => $jenisproducts,
                'deskripsi' => $deskripsi,
                'tanggalterbit' => $tanggalterbit,
                'photo' => $path,
            ]);
        $data = _data_products::all();
        return View('Admin.tableproducts', compact(["data"]));
    }
    public function edit($id)
    {
        $data = _data_products::find($id);
        $products = [
            'id' => $id,
            'namaperusahaan' => $data->namaperusahaan,
            'namaproducts' => $data->namaproducts,
            'jenisproducts' => $data->jenisproducts,
            'deskripsi' => $data->deskripsi,
            'tanggalterbit' => $data->tanggalterbit,
            'photo' => $data->path,
        ];
        return view('Admin.CRUDproducts.editproducts', $products);
    }
    public function update($id, Request $request)
    {
        $namaperusahaan = $request->input('namaperusahaan');
        $namaproducts = $request->input('namaproducts');
        $jenisproducts = $request->input('jenisproducts');
        $deskripsi = $request->input('deskripsi');
        $tanggalterbit = $request->input('tanggalterbit');
        $photo = $request->input('photo');

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads');
        } else {
            $path = "";
        }


        $data = _data_products::find($id);
        $pathFoto = $data->photo;
        if ($pathFoto != null || $pathFoto != '') {
            Storage::delete($pathFoto);
        }
        $data = _data_products::where('id', $id)
            ->update([
                'namaperusahaan' => $namaperusahaan,
                'namaproducts' => $namaproducts,
                'jenisproducts' => $jenisproducts,
                'deskripsi' => $deskripsi,
                'tanggalterbit' => $tanggalterbit,
                'photo' => $path,
            ]);

        $data = _data_products::all();
        return View('Admin.tableproducts', compact(["data"]));
    }
    public function delete($id)
    {
        $data = _data_products::find($id);
        $pathFoto = $data->photo;
        if ($pathFoto != null || $pathFoto != '') {
            Storage::delete($pathFoto);
        }
        $data->delete();
        $data = _data_products::all();
        return View('Admin.tableproducts', compact(["data"]));
    }
}
