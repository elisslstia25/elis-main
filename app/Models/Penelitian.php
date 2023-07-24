<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;
use App\Models\Pegawai;

class Penelitian extends Model
{
    protected $table ="penelitian";
    public $primaryKey ="id";

    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    function handleUploadDokumen1()
    {
        if (request()->hasFile('dokumen')) {
            $dokumen = request()->file('dokumen');
            $destination = "penelitian/dokumen-1";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $dokumen->extension();
            $url = $dokumen->storeAs($destination, $filename);
            $this->dokumen = "app/" . $url;
            
        }
    }

    function handleUploadDokumen2()
    {
        if (request()->hasFile('dokumen2')) {
            $dokumen2 = request()->file('dokumen2');
            $destination = "penelitian/dokumen-3";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $dokumen2->extension();
            $url = $dokumen2->storeAs($destination, $filename);
            $this->dokumen2 = "app/" . $url;
            
        }
    }

    function handleUploadDokumen3()
    {
        if (request()->hasFile('dokumen3')) {
            $dokumen3 = request()->file('dokumen3');
            $destination = "penelitian/dokumen-3";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $dokumen3->extension();
            $url = $dokumen3->storeAs($destination, $filename);
            $this->dokumen3 = "app/" . $url;
            
        }
    }

    function handleUploadDokumenMitra()
    {
        if (request()->hasFile('dokumen_mitra')) {
            $dokumen_mitra = request()->file('dokumen_mitra');
            $destination = "penelitian/dokumen-mitra";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $dokumen_mitra->extension();
            $url = $dokumen_mitra->storeAs($destination, $filename);
            $this->dokumen_mitra = "app/" . $url;
            
        }
    }
}
