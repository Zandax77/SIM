<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waka;

class KendaliDkv extends Controller
{
    //

    public function dokumenDkv(){
        $data = Progli::where('jurusan','Dkv')->get();
        return view('kurikulum',['data'=>$data]);
    }

    public function simpanDokumenDkv(Request $request){
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
            'bagian'=>'Dkv',
            'judul'=>$kegiatan,
            'link'=>$tautan,
            'dokumen'=>$namaFile,
            'keterangan'=>$ket,
            'file'=>$file
        ]);

        return redirect('kurikulum');


    }
}
