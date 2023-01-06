<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan_m extends Model
{
    use HasFactory;
    protected $table = 'mst_kendaraan';
    protected $primaryKey = 'No';
    public $timestamps = false;
    use HasFactory;

    function get_records($criteria='')
    {
        $result = self::select('*')
                ->when($criteria, function ($query, $criteria) {
                    return $query->where('No',$criteria);
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
        $result = self::where('No', $id)
            ->update($data);
        return $result;
    }

    function delete_by_id($id)
    {
        $result = self::where('No', $id)
            ->delete();
        return $result;
    }


 // tambahan fungsi untuk transaksi pinjam (dropdown)
 function opt_Kendaraan()
 {
     $result = self::select('No','Nama','Jenis')
             ->get();
     foreach ($result as $row)
     {
         $rowKendaraan[$row->No]=$row->Nama." - ".$row->Jenis;
     }
     return $rowKendaraan;
 }
}
