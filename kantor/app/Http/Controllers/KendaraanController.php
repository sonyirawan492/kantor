<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan_m;

class KendaraanController extends Controller
{
    var $data;

    public function __construct()
    {
        $this->data['opt_merk'] = [
            '' =>'-Pilih salah satu -',
            'Honda' => 'Honda',
            'Yamaha' => 'Yamaha',
            'Suzuki' => 'Suzuki'
        ];
    }

    public function index(Kendaraan_m $kendaraan)
    {
        $data = [
            'query' => $kendaraan->get_records(),
            'query' => $kendaraan->paginate(2),
            'optmerk' => $this->data['opt_merk']
        ];
        return view('kendaraan.list', $data);
    }

    public function add_new()
    {
        $data = [
            'is_update' => 0,
            'optmerk' => $this->data['opt_merk']
        ];
        return view('kendaraan.add', $data);
    }

    public function save(Kendaraan_m $kendaraan, Request $request)
    {
        $validated = $request->validate([
            'Nama' => 'required',
            'Jenis' => 'required',
            'Merk' => 'required',
        ]);

        $data['Nama']      = $request->input('Nama');
        $data['Jenis']  = $request->input('Jenis');
        $data['Merk']   = $request->input('Merk');
        $is_update = $request->input('is_update');

        if($is_update==0)
        {
            if($kendaraan->insert_record($data));
                return redirect('kendaraan');
        }
        else
        {
            $id=$request->input('id');
            if($kendaraan->update_by_id($data,$id));
                return redirect('kendaraan');
        }
    }

    public function edit($id, Kendaraan_m $kendaraan)
    {
        $data = [
            'query' => $kendaraan->get_records($id)->first(),
            'is_update' => 1,
            'optmerk' => $this->data['opt_merk']
        ];
        return view('merk.edit', $data);
    }

    public function delete($id, Kendaraan_m $kendaraan)
    {
        if($kendaraan->delete_by_id($id))
            return redirect('kendaraan');
    }
}
