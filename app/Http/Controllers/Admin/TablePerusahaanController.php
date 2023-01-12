<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\_data_perusahaan;

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
        return View('Admin.perusahaancreate', compact(["data"]));
    }
}
