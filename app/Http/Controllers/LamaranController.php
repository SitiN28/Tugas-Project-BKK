<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Lamaran;


class LamaranController extends Controller
{
    function show(){
        $data['lamaran']=Lamaran::all();
        return view('lamaran',$data);
    }
    function add(){
        $data = [
            'action'=>url('lamaran/create'),
            'tombol'=>'simpan',
            'lamaran'=>(object)[
                'nama'=>'',
                'jk'=>'',
                'tgl_lahir'=>'',
                'jurusan'=>'',
                'thn_ajaran'=>'',
                'alamat'=>'',
                'foto'=>''
            ],
        ];
        return view ('formlamaran', $data);

    }
    function create (Request $req){
        Lamaran::create([
            'nama'=>$req->nama,
            'jk'=>$req->jk,
            'tgl_lahir'=>$req->tgl_lahir,
            'jurusan'=>$req->jurusan,
            'thn_ajaran'=>$req->thn_ajaran,
            'alamat'=>$req->alamat,
            'foto'=>$req->file('foto')->store('foto')
        ]);
        return redirect('lamaran');
    }
    function hapus($id){
        $lamaran=Lamaran::where('id',$id)->first();
        $lamaran->delete();
        // Storage::delete($portofolio->foto);
        return redirect('lamaran');
    }
    function edit ($id) {
        $data['lamaran']=Lamaran::find($id);
        $data['action']=url('lamaran/update').'/'.$data['lamaran']->id;
        $data['tombol']='update';
        return view('formlamaran',$data);
    }
    function update(Request $req){
        Lamaran::where('id',$req->id)->update([
            'nama'=>$req->nama,
            'jk'=>$req->jk,
            'tgl_lahir'=>$req->tgl_lahir,
            'jurusan'=>$req->jurusan,
            'thn_ajaran'=>$req->thn_ajaran,
            'alamat'=>$req->alamat,
            'foto'=>$req->file('foto')->store('foto')
        ]);
        return redirect('lamaran');
    }
}
