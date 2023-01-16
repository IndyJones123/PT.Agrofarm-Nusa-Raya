<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\_data_pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TablePertanyaanController extends Controller
{
    public function index()
    {
        $data = _data_pertanyaan::all();
        return View('Admin.tablepertanyaan', compact(["data"]));
    }
    public function create_perusahaan()
    {
        $data = _data_pertanyaan::all();
        return View('Admin.CRUDpertanyaan.createpertanyaan', compact(["data"]));
    }
    public function store(Request $request)
    {
        $namaperusahaan = $request->input('namaperusahaan');
        $pertanyaan = $request->input('pertanyaan');
        $jawaban = $request->input('jawaban');

        $data = DB::table('_data_pertanyaan')
            ->insert([
                'namaperusahaan' => $namaperusahaan,
                'pertanyaan' => $pertanyaan,
                'jawaban' => $jawaban,
            ]);
        $data = _data_pertanyaan::all();
        return View('Admin.tablepertanyaan', compact(["data"]));
    }
    public function edit($id)
    {
        $data = _data_pertanyaan::find($id);
        return view('Admin.CRUDpertanyaan.editpertanyaan', compact(["data"]));
    }
    public function update($id, Request $request)
    {
        $namaperusahaan = $request->input('namaperusahaan');
        $pertanyaan = $request->input('pertanyaan');
        $jawaban = $request->input('jawaban');

        $data = _data_pertanyaan::find($id);

        $data->update([
            'namaperusahaan' => $namaperusahaan,
            'pertanyaan' => $pertanyaan,
            'jawaban' => $jawaban,

        ]);
        $data = _data_pertanyaan::all();
        return View('Admin.tablepertanyaan', compact(["data"]));
    }
}
