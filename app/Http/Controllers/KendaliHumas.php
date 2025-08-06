<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waka;

class KendaliHumas extends Controller
{
    //

    public function dokumenHumas(){
        $data = Waka::where('bagian','Humas')->get();
        return view('humas',['data'=>$data]);
    }

    public function simpanDokumenHumas(Request $request){
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
            'bagian'=>'Humas',
            'judul'=>$kegiatan,
            'link'=>$tautan,
            'dokumen'=>$namaFile,
            'keterangan'=>$ket,
            'file'=>$file
        ]);

        return redirect('humas');
    }

	public function hapusDokumenHumas($id){
    	Waka::where('id',$id)->delete();
    	return redirect('humas');
    }
}
