<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function showdash(Request $request){
      return view('admin.dashboard');
    }
    //add,edit in governorController
    public function showGovernorHome(){
        $users= User::all();
        return view('admin.index',['users'=>$users]);
    }
    public function showUserCreate(){

        return view('admin.newadmin');
    }

    public function createAdmin(Request $request){
        $request->validate([
            'name' => ['required','min:3','max:50'],
            'gender' => 'required',

        ]);
        User::create([
            'name_governor'=> $request->name_governor,
            'gender'=> $request->gender,
            'age'=> $request->age,
            'party_id'=> $request->party_id,
            'state_id'=> $request->state_id,
        ]);
        return redirect('/admin')->with('status', 'Admin added');
    }
    public function updateAdmin(int $id){
        $user = User::findOrfail($id);
        return view('admin.edadmin');
    }
    public function update(Request $req, int $id){
        $req->validate([
                'name_governor' => ['required','min:3','max:50'],
                'gender' => 'required',
                'state_id' => 'required|integer',
                'party_id' => 'required|integer',
        ]);
        Governor::findOrfail($id)->update($req->all());
        return redirect('/governor')->with('status', 'governor updated');
    }
    public function deleteAdmin(int $id){
        $user = User::findOrfail($id);
        $governor->delete();
        return redirect('/admin')->with('status', 'Admin deleted');
    }
}
