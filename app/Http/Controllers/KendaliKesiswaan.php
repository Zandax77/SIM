<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waka;

class KendaliKesiswaan extends Controller
{
    //
	public function dokumenKesiswaan(){
        $data = Waka::where('bagian','Kesiswaan')->get();
        return view('kesiswaan',['data'=>$data]);
    }

    public function simpanDokumenKesiswaan(Request $request){
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
            'bagian'=>'Kesiswaan',
            'judul'=>$kegiatan,
            'link'=>$tautan,
            'dokumen'=>$namaFile,
            'keterangan'=>$ket,
            'file'=>$file
        ]);

        return redirect('kesiswaan');
    }

	public function hapusDokumenKesiswaan($id){
    	Waka::where('id',$id)->delete();
    	return redirect('kesiswaan');
    }
}
