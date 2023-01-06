<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai_m extends Model
{
    use HasFactory;

    protected $table = 'mst_Pegawai';
    protected $primaryKey = 'ID_Pegawai';
    public $timestamps = false;

    function get_records($criteria='')
    {
        $result = self::select('*')
                ->when($criteria, function ($query, $criteria) {
                    return $query->where('ID_Pegawai',$criteria);
            })
            ->get();
        return $result;
    }

   function insert_record($data)
    {
        $result = self::insert($data);
        return $result;
    }

    function update_by_id($data, $id)
    {
        $result = self::where('ID_Pegawai', $id)
            ->update($data);
        return $result;
    }

    function delete_by_id($id)
    {
        $result = self::where('ID_Pegawai', $id)
            ->delete();
        return $result;
    }


 // tambahan fungsi untuk transaksi pinjam (dropdown)
 function opt_Pegawai()
 {
     $result = self::select('ID_Pegawai','Nama','Alamat')
             ->get();
     foreach ($result as $row)
     {
         $rowPegawai[$row->ID_Pegawai]=$row->Nama." - ".$row->Alamat;
     }
     return $rowPegawai;
 }
}