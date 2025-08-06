<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waka;

class KendaliBdp extends Controller
{
    //

    public function dokumenBdp(){
        $data = Waka::where('jurusan','Bdp')->get();
        return view('kurikulum',['data'=>$data]);
    }

    public function simpanDokumenBdp(Request $request){
        $kegiatan = $request->kegiatan;
        $tautan = $request->tautan;
        $file = $request->file;
        $ket = $request->keterangan;

        if($file!=""){
            $namaFile = $file->getClientOriginalName();
            $tujuan = 'dokumen';

            $file->move($tujuan,$namaFile);
        }else{
            $namaFile="";
        }

        Progli::create([
            'bagian'=>'Bdp',
            'judul'=>$kegiatan,
            'link'=>$tautan,
            'dokumen'=>$namaFile,
            'keterangan'=>$ket,
            'file'=>$file
        ]);

        return redirect('kurikulum');


    }
}
