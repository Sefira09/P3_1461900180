<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Prak3Controller extends Controller
{
    public function index()
    {
     // mengambil data dari table pegawai
     $pasien = DB::table('pasien')->get();
     // mengirim data pegawai ke view index
     return view('pasien0180',['pasien' => $pasien]);
    }


    public function edit($id)
    {
        $pasien = DB::table('pasien')->where('id',$id)->get();
        return view('edit0044',['pasien' => $pasien]);

    }

    public function update(Request $request)
    {
        DB::table('pasien')->where('id',$request->id)->update([
        'nama' => $request->nama,
        'alamat' => $request->alamat
        ]);
            return redirect('/pasien');
    }
    
    public function store(Request $request)
    {
        // insert data ke table pasien
        DB::table('pasien')->insert([
        'id' => $request->id,
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        ]);
        // alihkan halaman ke  URL halaman pasien
        return redirect('/pasien');
    
    }

    public function hapus($id)
    {
        DB::table('pasien')->where('id',$id)->delete();
        return redirect('/pasien');

    }

    public function cari(Request $request)
    {
        $cari=$request->lihat;
        $pasien=DB::table('pasien')->where('nama','like',"%".$cari."%")->paginate();
        return view('pasien0180',['pasien' => $pasien]);

    }
}
