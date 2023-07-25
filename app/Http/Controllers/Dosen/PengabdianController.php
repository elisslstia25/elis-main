<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Pengabdian;
use Illuminate\Http\Request;

class PengabdianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_pengabdian'] = Pengabdian::latest()->get();
        return view('dosen.pengabdian.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.pengabdian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $pengabdian = new Pengabdian();
        $pengabdian->id_pegawai             = request('id_pegawai');
        $pengabdian->nidn                   = request('nidn');
        $pengabdian->status_pegawai         = request('status_pegawai');
        $pengabdian->tanggung_jawab         = request('tanggung_jawab');
        $pengabdian->tahun_usulan           = request('tahun_usulan');
        $pengabdian->tahun_pelaksanaan      = request('tahun_pelaksanaan');
        $pengabdian->judul_pengabdian       = request('judul_pengabdian');
        $pengabdian->tkt_new                = request('tkt_new');
        $pengabdian->end_tkt                = request('end_tkt');
        $pengabdian->skema_pengabdian       = request('skema_pengabdian');
        $pengabdian->rumpun_ilmu1           = request('rumpun_ilmu1');
        $pengabdian->rumpun_ilmu2           = request('rumpun_ilmu2');
        $pengabdian->rumpun_ilmu3           = request('rumpun_ilmu3');
        $pengabdian->bidang_pengabdian      = request('bidang_pengabdian');
        $pengabdian->bidang_prn             = request('bidang_prn');
        $pengabdian->tema_pengabdian        = request('tema_pengabdian');
        $pengabdian->topik_pengabdian       = request('topik_pengabdian');
        $pengabdian->lama_kegiatan          = request('lama_kegiatan');
        $pengabdian->nama_gelar1            = request('nama_gelar1');
        $pengabdian->kualifikasi1           = request('kualifikasi1');
        $pengabdian->bidang_keahlian1       = request('bidang_keahlian1');
        $pengabdian->peran1                 = request('peran1');
        $pengabdian->tugas_pengabdian1      = request('tugas_pengabdian1');
        $pengabdian->nama_gelar2            = request('nama_gelar2');
        $pengabdian->kualifikasi2           = request('kualifikasi2');
        $pengabdian->bidang_keahlian2       = request('bidang_keahlian2');
        $pengabdian->peran2                 = request('peran2');
        $pengabdian->tugas_pengabdian2      = request('tugas_pengabdian2');

        $pengabdian->jumlah_pendanaan       = request('jumlah_pendanaan');
        $pengabdian->nama_mitra             = request('nama_mitra');
        $pengabdian->bidang_mitra           = request('bidang_mitra');
        $pengabdian->alamat_mitra           = request('alamat_mitra');

        $pengabdian->handleUploadDokumen();
        $pengabdian->handleUploadDokumen2();
        $pengabdian->handleUploadDokumen3();
        $pengabdian->handleUploadDokumenMitra();

        $pengabdian->status = '1';

        $pengabdian->save();

        return redirect('dosen/pengabdian');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
