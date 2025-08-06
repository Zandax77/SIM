<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Tendik;
use Illuminate\Http\Request;

class KendaliAdm extends Controller
{
    public function grafikGuru(){
        $data = Guru::all();

        //status
        $pns = Guru::where('status','PNS')->count();
        $pppk = Guru::where('status','PPPK')->count();
        $gtt = Guru::where('status','GTT')->count();

        //pendidikan
        $s3 = Guru::where('pendidikan','S3')->count();
        $s2 = Guru::where('pendidikan','S2')->count();
        $s1 = Guru::where('pendidikan','S1')->count();
        $d3 = Guru::where('pendidikan','D3')->count();

        //sertifikasi
        $x = Guru::where('sertifikasi','Sertifikasi')->count();
        $y = Guru::where('sertifikasi','Belum Sertifikasi')->count();

        return view('grafikGuru',['data'=>$data, 'pns'=>$pns,'pppk'=>$pppk,'gtt'=>$gtt,'s2'=>$s2,'s1'=>$s1,'s3'=>$s3,'d3'=>$d3,'x'=>$x,'y'=>$y]);
    }

    public function simpanGuru(Request $request){
        $nama = $request->nama;
        $lahir = $request->lahir;
        $jkel = $request->jkel;
        $status = $request->status;
        $pendidikan = $request->pendidikan;
        $gelar = $request->gelar;
        $sertifikasi=$request->sergur;
        $alamat = $request->alamat;
        $foto = $request->foto;

        $namaFile = $foto->getClientOriginalName();
        $tujuan = 'images';

        $foto->move($tujuan,$namaFile);

        Guru::create([
            'nama'=>$nama,
            'lahir'=>$lahir,
            'jkel'=>$jkel,
            'status'=>$status,
            'pendidikan'=>$pendidikan,
            'gelar'=>$gelar,
            'sergur'=>$sertifikasi,
            'alamat'=>$alamat,
            'foto'=>$foto
        ]);

        return redirect('guru');
    }

    public function guru(){
        $data = Guru::all();
        return view('guru',['data'=>$data]);
    }

    public function hapusGuru($id){
        Guru::where('id',$id)->delete();
        return redirect('guru');
    }

    public function grafikTendik(){

        $data = Tendik::all();
        //status
        $pns = Tendik::where('status','PNS')->count();
        $pppk = Tendik::where('status','PPPK')->count();
        $ptt = Tendik::where('status','PTT')->count();

        //pendidikan
        $s3 = Tendik::where('pendidikan','S3')->count();
        $s2 = Tendik::where('pendidikan','S2')->count();
        $s1 = Tendik::where('pendidikan','S1')->count();
        $d3 = Tendik::where('pendidikan','D3')->count();
        $sma = Tendik::where('pendidikan','SMA')->count();

        return view('grafikTendik',['data'=>$data, 'pns'=>$pns,'pppk'=>$pppk,'ptt'=>$ptt,'s2'=>$s2,'s1'=>$s1,'s3'=>$s3,'d3'=>$d3,'sma'=>$sma]);
    }

    public function simpanTendik(Request $request){
        $nama = $request->nama;
        $lahir = $request->lahir;
        $jkel = $request->jkel;
        $status = $request->status;
        $pendidikan = $request->pendidikan;
        $gelar = $request->gelar;
        $alamat = $request->alamat;
        $foto = $request->foto;

        $namaFile = $foto->getClientOriginalName();
        $tujuan = 'images';

        $foto->move($tujuan,$namaFile);

        Tendik::create([
            'nama'=>$nama,
            'lahir'=>$lahir,
            'jkel'=>$jkel,
            'status'=>$status,
            'pendidikan'=>$pendidikan,
            'gelar'=>$gelar,
            'alamat'=>$alamat,
            'foto'=>$foto
        ]);

        return redirect('tendik');
    }

    public function tendik(){
        $data = Tendik::all();
        return view('tendik',['data'=>$data]);
    }

}
