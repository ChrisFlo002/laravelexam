<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flag;

class FlagController extends Controller
{
    public function showFlagHome(){
        $flags = Flag::all();
        return view('flag.index',['flags'=>$flags]);
    }
    public function showFlagDetails(int $id){
        $flag = Flag::find($id);
        return view('flag.detflag',['flag'=>$flag]);
    }
    public function showFlagCreate(){
        return view('flag.newflag');
    }
    public function showFlagDelete(){
        return view('flag.deleteflag');
    }
    public function createFlag(Request $request){
        $request->validate([
            'image' => ['required',],
        ]);
        Flag::create([
            'image'=> $request->image,
        ]);
        return redirect('/flag')->with('status', 'Flag added');
    }
    public function updateFlag(int $id){
        $flag = Flag::findOrfail($id);
        return view('flag.edflag',['flag'=>$flag]);
    }
    public function update(Request $req, int $id){
        $req->validate([
            'image' => ['required'],
        ]);
        Flag::findOrfail($id)->update($req->all());
        return redirect('/flag')->with('status', 'Flag updated');
    }
    public function deleteFlag(int $id){
        $flag = Flag::findOrfail($id);
        $flag->delete();
        return redirect('/flag')->with('status', 'Flag deleted');
    }
}

