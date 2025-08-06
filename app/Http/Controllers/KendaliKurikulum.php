<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waka;

class KendaliKurikulum extends Controller
{
    //

    public function dokumenKurikulum(){
        $data = Waka::where('bagian','Kurikulum')->get();
        return view('kurikulum',['data'=>$data]);
    }

    public function simpanDokumenKurikulum(Request $request){
        $kegiatan = $request->kegiatan;
        $tautan = $request->tautan;
        $file = $request->file;
        $ket = $request->keterangan;

        date_default_timezone_set('Asia/Jakarta');

        if($file!=""){
            $namaFile = $file->getClientOriginalName();
            $tujuan = 'dokumen';

            $file->move($tujuan,$namaFile);
        }else{
            $namaFile="";
        }

        Waka::create([
            'bagian'=>'Kurikulum',
            'judul'=>$kegiatan,
            'link'=>$tautan,
            'dokumen'=>$namaFile,
            'keterangan'=>$ket,
            'file'=>$file
        ]);

        return redirect('kurikulum');
    }

	public function hapusDokumenKurikulum($id){
    	Waka::where('id',$id)->delete();
    	return redirect('kurikulum');
    }
}
