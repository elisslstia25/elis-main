<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
   
    public function index()
    {
        $data['list_penelitian'] = Penelitian::all();
        return view('admin.penelitian.index', $data);
    }
    
    public function show(Penelitian $penelitian){
        $data['penelitian'] = $penelitian;
        return view('admin.penelitian.show', $data);
    }

    public function status($penelitian)
    {
        $penelitian = Penelitian::find($penelitian);
        $penelitian->status = request('status');
        $penelitian->save();
        return redirect('admin/penelitian/berjalan')->with('success', 'Data Didanai');
    }


}
