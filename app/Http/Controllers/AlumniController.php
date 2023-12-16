<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Alumni;

class AlumniController extends Controller
{
    function show(){
        $data['alumni']=Alumni::all();
        return view('alumni',$data);
    }
    function add(){
        $data = [
            'action'=>url('alumni/create'),
            'tombol'=>'simpan',
            'alumni'=>(object)[
                'nama'=>'',
                'alamat'=>'',
                'no_hp'=>'',
                'foto'=>''
            ],
        ];
        return view ('formalumni', $data);

    }
    function create (Request $req){
        Alumni::create([
            'nama'=>$req->nama,
            'alamat'=>$req->alamat,
            'no_hp'=>$req->no_hp,
            'foto'=>$req->file('foto')->store('foto')
        ]);
        return redirect('alumni');
    }
    function hapus($id){
        $alumni=Alumni::where('id',$id)->first();
        $alumni->delete();
        // Storage::delete($portofolio->foto);
        return redirect('alumni');
    }
    function edit ($id) {
        $data['alumni']=Alumni::find($id);
        $data['action']=url('alumni/update').'/'.$data['alumni']->id;
        $data['tombol']='update';
        return view('formalumni',$data);
    }
    function update(Request $req){
        Alumni::where('id',$req->id)->update([
            'nama'=>$req->nama,
            'alamat'=>$req->alamat,
            'no_hp'=>$req->no_hp,
            'foto'=>$req->file('foto')->store('foto')
        ]);
        return redirect('alumni');
    }
}
