<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_penelitian'] = Penelitian::latest()->get();
        return view('dosen.penelitian.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.penelitian.create');
    }

    public function store()
    {
        $penelitian = new Penelitian();
        $penelitian->id_pegawai             = request('id_pegawai');
        $penelitian->nidn                   = request('nidn');
        $penelitian->status_pegawai         = request('status_pegawai');
        $penelitian->tanggung_jawab         = request('tanggung_jawab');
        $penelitian->tahun_usulan           = request('tahun_usulan');
        $penelitian->tahun_pelaksanaan      = request('tahun_pelaksanaan');
        $penelitian->judul_penelitian       = request('judul_penelitian');
        $penelitian->tkt_new                = request('tkt_new');
        $penelitian->end_tkt                = request('end_tkt');
        $penelitian->skema_penelitian       = request('skema_penelitian');
        $penelitian->rumpun_ilmu1           = request('rumpun_ilmu1');
        $penelitian->rumpun_ilmu2           = request('rumpun_ilmu2');
        $penelitian->rumpun_ilmu3           = request('rumpun_ilmu3');
        $penelitian->bidang_penelitian      = request('bidang_penelitian');
        $penelitian->bidang_prn             = request('bidang_prn');
        $penelitian->tema_penelitian        = request('tema_penelitian');
        $penelitian->topik_penelitian       = request('topik_penelitian');
        $penelitian->lama_kegiatan          = request('lama_kegiatan');
        $penelitian->nama_gelar1            = request('nama_gelar1');
        $penelitian->kualifikasi1           = request('kualifikasi1');
        $penelitian->bidang_keahlian1       = request('bidang_keahlian1');
        $penelitian->peran1                 = request('peran1');
        $penelitian->tugas_penelitian1      = request('tugas_penelitian1');
        $penelitian->nama_gelar2            = request('nama_gelar2');
        $penelitian->kualifikasi2           = request('kualifikasi2');
        $penelitian->bidang_keahlian2       = request('bidang_keahlian2');
        $penelitian->peran2                 = request('peran2');
        $penelitian->tugas_penelitian2      = request('tugas_penelitian2');

        $penelitian->jumlah_pendanaan       = request('jumlah_pendanaan');
        $penelitian->nama_mitra             = request('nama_mitra');
        $penelitian->bidang_mitra           = request('bidang_mitra');
        $penelitian->alamat_mitra           = request('alamat_mitra');

        $penelitian->handleUploadDokumen1();
        $penelitian->handleUploadDokumen2();
        $penelitian->handleUploadDokumen3();
        $penelitian->handleUploadDokumenMitra();

        $penelitian->status = '1';

        $penelitian->save();

        return redirect('dosen/penelitian');
    }

    public function show()
    {
    }

    public function edit()
    {
    }

   


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $penelitian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $penelitian)
    {
        //
    }
}
