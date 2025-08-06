<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waka;

class KendaliAkl extends Controller
{
    //

    public function dokumenAkuntansi(){
        $data = Waka::where('jurusan','Akl')->get();
        return view('kurikulum',['data'=>$data]);
    }

    public function simpanDokumenAkuntansi(Request $request){
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
            'bagian'=>'Akl',
            'judul'=>$kegiatan,
            'link'=>$tautan,
            'dokumen'=>$namaFile,
            'keterangan'=>$ket,
            'file'=>$file
        ]);

        return redirect('akuntansi');


    }
}
