<?php

namespace App\Http\Controllers;
 
use App\Models\PakaianAdat;
use Illuminate\Http\Request;
use App\Http\Requests\PakaianAdatRequest;

class PakaianAdatController extends Controller
{
    public function index(){
        $PakaianAdat = PakaianAdat::get();
        return view('index', compact('PakaianAdat'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function edit($id){
        $PakaianAdat = PakaianAdat::where('id', $id)->first();
        return view('edit', compact('PakaianAdat'));
    }

    public function lihat($id){
        $PakaianAdat = PakaianAdat::where('id', $id)->first();
        return view('lihat', compact('PakaianAdat'));

    }    
    public function store(PakaianAdatRequest $request) 
    { 
        $PakaianAdat = new PakaianAdat(); 
 
        $PakaianAdat->nama_pakaian = $request->nama_pakaian; 
        $PakaianAdat->asal_daerah = $request->asal_daerah; 

 
        $PakaianAdat->save(); 
 
        return redirect('/'); 
    }

    public function update(PakaianAdatRequest $request, $id) 
    { 
        $PakaianAdat = PakaianAdat::where('id', $id)->first(); 
 
        $PakaianAdat->nama_pakaian = $request->nama_pakaian; 
        $PakaianAdat->asal_daerah = $request->asal_daerah; 

        $PakaianAdat->update(); 
 
        return redirect('/'); 
    }

    public function hapus($id) 
    { 
        $PakaianAdat = PakaianAdat::where('id', $id)->first(); 

        $PakaianAdat->delete(); 
 
        return redirect('/'); 
    }

}
