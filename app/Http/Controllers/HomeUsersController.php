<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\_data_perusahaan;

class HomeUsersController extends Controller
{
    public function index()
    {
        $data = DB::select('select * from _data_perusahaan WHERE id = 1');
        return View('HomeUsers', compact(["data"]));
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
}
