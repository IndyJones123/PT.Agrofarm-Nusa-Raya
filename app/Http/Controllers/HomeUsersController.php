<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\_data_perusahaan;
use Illuminate\Support\Facades\Storage;
use App\Models\_data_products;


class HomeUsersController extends Controller
{
    public function index()
    {
        $data = DB::select('select * from _data_perusahaan WHERE id = 1');
        $databranch = DB::select('select photobesar from _data_perusahaan WHERE id != 1');
        $datapimpinan = DB::select('select * from data_pimpinan WHERE namaperusahaan="PT.Agrofarm Nusa Raya"');
        $datapertanyaan = DB::select('select * from _data_pertanyaan WHERE namaperusahaan="PT.Agrofarm Nusa Raya"');
        $dataproducts = DB::select('select * from data_products WHERE namaperusahaan="PT.Agrofarm Nusa Raya"');
        return View('HomeUsers', compact(["data"], ["datapimpinan"], ["datapertanyaan"], ["databranch"], ["dataproducts"]));
    }
    public function Branch1()
    {
        return View('PTMultiNiagaAbadi');
    }
    public function Branch2()
    {
        return View('PTTalentaTigaMuda');
    }
    public function Branch3()
    {
        return View('PTAgriPrimeInternational');
    }
    public function Branch4()
    {
        return View('PTAgrochem');
    }
    public function Branch5()
    {
        return View('PTSAP');
    }
    public function edit($id)
    {
        $data = _data_products::find($id);
        return view('detailproducts', compact(["data"]));
    }
}
