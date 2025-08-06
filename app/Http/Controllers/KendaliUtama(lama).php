<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\Progli;
use App\Models\Waka;
use Illuminate\Http\Request;

class KendaliUtama extends Controller
{
    public function index(Request $request){
        if(session()->has('opr')){
            $opr = $request->session()->get('opr');
        }else{
            return redirect('login');
        }
    }

    public function admin(Request $request){
        return view('admin');
    }

    public function login(){
        return view('login');
    }

    public function logout(Request $request){
        $request->session()->forget('opr');
        $request->session()->forget('jabatan');

        return redirect('');
    }

    public function prosesLogin(Request $request){
        $kode = md5($request->kode);
        $sandi = md5($request->sandi);

        $data = Petugas::where('kode',$kode)->where('sandi',$sandi)->where('status','disetujui')->count();
        if($data!=0){
            $pengguna = Petugas::where('kode',$kode)->where('sandi',$sandi)->get();
            $user = $pengguna[0]->nama;
            $request->session()->put('opr',$user);
            $jabatan = $pengguna[0]->jabatan;
            $request->session()->put('jabatan',$jabatan);

            if($jabatan=='rpl'){
                return redirect('rpl');
            }
            if($jabatan=='dkv'){
                return redirect('dkv');
            }
            if($jabatan=='kkbt'){
                return redirect('kkbt');
            }
            if($jabatan=='akl'){
                return redirect('akl');
            }
            if($jabatan=='mp'){
                return redirect('mp');
            }
            if($jabatan=='bdp'){
                return redirect('bdp');
            }
            if($jabatan=='pkl'){
                return redirect('pkl');
            }
            if($jabatan=='kurikulum'){
                return view('kurikulum');
            }
            if($jabatan=='humas'){
                return view('humas');
            }
            if($jabatan=='sarana'){
                return view('sarana');
            }
            if($jabatan=='kesiswaan'){
                return view('kesiswaan');
            }
            if($jabatan=='bk'){
                return view('bk');
            }
            if($jabatan=='adm'){
                return view('adm');
            }


            //echo $user; echo $jabatan;
        } else{
            return view('gagalLogin');
        }

    }

    public function regOperator(){
        return view('regOperator');
    }

    public function simpanOperator(Request $request){
        $nama = $request->nama;
        $jabatan = $request->jabatan;
        $kode = md5($request->kode);
        $sandi = md5($request->sandi);
        $email = $request->email;
        $foto = $request->foto;
        $status = 'menunggu';

        $namaFile = $foto->getClientOriginalName();
        $tujuan = 'images';

        $foto->move($tujuan,$namaFile);

        Petugas::create([
            'nama' =>$nama,
            'email' =>$email,
            'jabatan'=>$jabatan,
            'kode'=>$kode,
            'sandi'=>$sandi,
            'foto'=>$namaFile,
            'status'=>$status
        ]);
        //return view('hasil');
        echo $nama; echo $email; echo $jabatan; echo $kode; echo $sandi; echo $namaFile; echo $status;
    }

    //dokumen jurusan
    public function proAkl(){
        $data = Progli::where('jurusan','AKL')->get();
        return view('dokAkl',['data'=>$data]);
    }

    public function proBdp(){
        $data = Progli::where('jurusan','BDP')->get();
        return view('dokBd',['data'=>$data]);
    }

    public function proMp(){
        $data = Progli::where('jurusan','MP')->get();
        return view('dokMp',['data'=>$data]);
    }

    public function proRpl(){
        $data = Progli::where('jurusan','RPL')->get();
        return view('dokRpl',['data'=>$data]);
    }

    public function proDkv(){
        $data = Progli::where('jurusan','DKV')->get();
        return view('dokDkv',['data'=>$data]);
    }

    public function proKkbt(){
        $data = Progli::where('jurusan','KKBT')->get();
        return view('dokKkbt',['data'=>$data]);
    }

    public function proPkl(){
        return view('dokPkl');
    }

    //dokumen waka
    public function dokKurikulum(){
        $data = Waka::where('bagian','Kurikulum')->get();
        return view('dokKurikulum',['data'=>$data]);
    }

    public function dokKesiswaan(){
        $data = Waka::where('bagian','Kesiswaan')->get();
        return view('dokKesiswaan',['data'=>$data]);
    }

    public function dokHumas(){
        $data = Waka::where('bagian','Humas')->get();
        return view('dokHumas',['data'=>$data]);
    }

    public function dokSarana(){
        $data = Waka::where('bagian','Sarana')->get();
        return view('dokSarana',['data'=>$data]);
    }

    //operator

    public function operator(){
        $data = Petugas::all();
        return view('operator',['data'=>$data]);
    }

    public function setujuiUser($kode){
        $x = 'disetujui';
        Petugas::where('kode',$kode)->update(['status'=>$x]);
        return redirect('operator');
    }

    public function blokirUser($kode){
        $x = 'menunggu';
        Petugas::where('kode',$kode)->update(['status'=>$x]);
        return redirect('operator');
    }

    public function hapusUser($kode){
        Petugas::where('kode',$kode)->delete();
        return redirect('operator');
    }

    public function rekapPresensi(){
        return view('presensi');
    }

    public function rekapJurnal(){
        return view('jurnal');
    }
}
