<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;
use App\Models\Pegawai;

class Pengabdian extends Model
{
    protected $table ="pengabdian";

    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    function handleUploadFile($field)
    {
        if (request()->hasFile($field)) {
            $file = request()->file($field);
            $destination = "formatproposal" . $field;   
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $field . "-" . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->$field = "app/" . $url;
            $this->save();
        }
    }
}
