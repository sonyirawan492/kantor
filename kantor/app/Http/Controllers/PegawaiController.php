<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai_m;

class PegawaiController extends Controller
{
    var $data;

    public function __construct()
    {
        $this->data['opt_jabatan'] = [
            '' =>'-Pilih salah satu -',
            'HRD' => 'HRD',
            'Staff Operasional' => 'Staff Operasional',
            'admin' => 'Admin',
            'Manager Operasional' => 'Manager Operasional',
            'kurir' => 'Kurir'
        ];
    }

    public function index(Pegawai_m $pegawai)
    {
        $data = [
            'query' => $pegawai->get_records(),
            'optjabatan' => $this->data['opt_jabatan']
        ];
        return view('pegawai.list', $data);
    }

    public function add_new()
    {
        $data = [
            'is_update' => 0,
            'optjabatan' => $this->data['opt_jabatan']
        ];
        return view('pegawai.add', $data);
    }

    public function save(Pegawai_m $pegawai, Request $request)
    {
        $data['Nama']      = $request->input('Nama');
        $data['Alamat']  = $request->input('Alamat');
        $data['Jabatan']   = $request->input('Jabatan');
        $is_update = $request->input('is_update');

        if($is_update==0)
        {
            if($pegawai->insert_record($data));
                return redirect('pegawai');
        }
        else
        {
            $id=$request->input('id');
            if($pegawai->update_by_id($data,$id));
                return redirect('pegawai');
        }
    }

    public function edit($id, Pegawai_m $pegawai)
    {
        $data = [
            'query' => $pegawai->get_records($id)->first(),
            'is_update' => 1,
            'optjabatan' => $this->data['opt_jabatan']
        ];
        return view('pegawai.edit', $data);
    }

    public function delete($id, Pegawai_m $pegawai)
    {
        if($pegawai->delete_by_id($id))
            return redirect('pegawai');
    }
}
