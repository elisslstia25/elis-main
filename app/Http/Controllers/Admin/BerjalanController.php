<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use Illuminate\Http\Request;

class BerjalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_penelitian'] = Penelitian::where('status', '2')->get();
        return view('admin.penelitian.berjalan.index', $data);
    }

    // public function pengabdianBerjalan()
    // {
    //     $data['list_penelitian'] = Penelitian::where('status', '2')->get();
    //     return view('admin.penelitian.berjalan.index', $data);
    // }

    /**
     * Show the form for creating a new resource.
     */
  
    public function show(Penelitian $penelitian)
    {
       $data['penelitian'] = $penelitian;
       return view('admin.penelitian.berjalan.show', $data);
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
