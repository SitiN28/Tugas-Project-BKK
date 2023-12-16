<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    function show(){
        $data['perusahaan']=Perusahaan::all();
        return view('perusahaan',$data);
    }
    function add(){
        $data = [
            'action'=>url('perusahaan/create'),
            'tombol'=>'simpan',
            'perusahaan'=>(object)[
                'nama_perusahaan'=>'',
                'alamat'=>'',
                'kontak'=>'',
                'foto'=>''
            ],
        ];
        return view ('formperusahaan', $data);

    }
    function create (Request $req){
        Perusahaan::create([
            'nama_perusahaan'=>$req->nama_perusahaan,
            'alamat'=>$req->alamat,
            'kontak'=>$req->kontak,
            'foto'=>$req->file('foto')->store('foto')
        ]);
        return redirect('perusahaan');
    }
    function hapus($id){
        $perusahaan=Perusahaan::where('id',$id)->first();
        $perusahaan->delete();
        // Storage::delete($portofolio->foto);
        return redirect('perusahaan');
    }
    function edit ($id) {
        $data['perusahaan']=Perusahaan::find($id);
        $data['action']=url('perusahaan/update').'/'.$data['perusahaan']->id;
        $data['tombol']='update';
        return view('formperusahaan',$data);
    }
    function update(Request $req){
        Perusahaan::where('id',$req->id)->update([
            'nama_perusahaan'=>$req->nama_perusahaan,
            'alamat'=>$req->alamat,
            'kontak'=>$req->kontak,
            'foto'=>$req->file('foto')->store('foto')
        ]);
        return redirect('perusahaan');
    }
}
