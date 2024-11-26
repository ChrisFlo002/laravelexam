<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\State;

class StateController extends Controller
{
    public function showStateCreate(){

        return view('state.statehome');
    }
    public function showStateHome(){
        $states = State::all();

        return view('states.homestate', ['states' => $states]);
    }
    public function showStateDelete(){
        return view('state.deletestate');
    }
    public function createState(Request $request){
        $request->validate([
            'code' => ['required','min:1','max:3'],
            'name' => ['required','min:3','max:20'],
            'pib' => 'required',
            'population' => 'required|min:1',
            'path'=>'required',
            'area' => 'required|min:1',

        ]);
        State::create($request->all());
        return redirect('/state')->with('status', 'State added');
    }

    public function updateState(int $id){
        $state = State::findOrfail($id);
        return view('state.stateedit',['state'=>$state]);
    }
    public function update(Request $req, int $id){
        $req->validate([
            'code' => ['required','min:1','max:3'],
            'name' => ['required','min:3','max:20'],
            'pib' => 'required',
            'population' => 'required|min:1',
            'area' => 'required|min:1',
        ]);
        State::findOrfail($id)->update($req->all());
        return redirect('/state')->with('status', 'State updated');
    }
    public function deleteState(int $id){
        $state = State::findOrfail($id);
        $state->delete();
        return redirect('/state')->with('status', 'State deleted');
    }
}
