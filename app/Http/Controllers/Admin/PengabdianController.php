<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Pengabdian;
use Illuminate\Http\Request;

class PengabdianController extends Controller
{
   
    public function index()
    {
        $data['list_pengabdian'] = Pengabdian::all();
        return view('admin.pengabdian.index', $data);
    }
    
    public function show(Pengabdian $pengabdian){
        $data['pengabdian'] = $pengabdian;
        return view('admin.pengabdian.show', $data);
    }

    public function status($pengabdian)
    {
        $pengabdian = Pengabdian::find($pengabdian);
        $pengabdian->status = request('status');
        $pengabdian->save();
        return redirect('admin/pengabdian/berjalan')->with('success', 'Data Didanai');
    }


}
