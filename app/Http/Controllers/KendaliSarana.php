<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waka;

class KendaliSarana extends Controller
{
    //

    public function dokumenSarana(){
        $data = Waka::where('bagian','Sarana')->get();
        return view('sarana',['data'=>$data]);
    }

    public function simpanDokumenSarana(Request $request){
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
            'bagian'=>'Sarana',
            'judul'=>$kegiatan,
            'link'=>$tautan,
            'dokumen'=>$namaFile,
            'keterangan'=>$ket,
            'file'=>$file
        ]);

        return redirect('sarana');
    }

	public function hapusDokumenSarana($id){
    	Waka::where('id',$id)->delete();
    	return redirect('sarana');
    }
}
