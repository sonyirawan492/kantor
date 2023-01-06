<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan_m;
use App\Models\Pegawai_m;
use App\Models\Pinjam_m;

class PinjamController extends Controller
{
    function index(Kendaraan_m $kendaraan, Pegawai_m $pegawai)
    {
        $data = [
            'optpegawai' => $pegawai->opt_pegawai(),
            'optkendaraan' => $kendaraan->opt_kendaraan()
        ];
        return view('pinjam.add', $data);
    }

    public function save(Pinjam_m $pinjam, Request $request)
    {
        $data['ID_Pegawai'] = $request->input('ID_Pegawai');
        $data['No'] = $request->input('No');
        $data['tgl_pinjam'] = $request->input('tgl_pinjam');
        $data['tgl_kembali'] = $request->input('tgl_kembali');

        if($pinjam->insert_record($data));
        return redirect('pinjam');
    }
}

