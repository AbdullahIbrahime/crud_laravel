<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queries extends Controller
{
    public function index(){
        $select=DB::table('article')->get();
        return view('index',compact('select'));
    }
    public function delete($id){
        DB::table('article')->delete($id);
        return redirect('/');
    }
    public function edit($id){
        $data=DB::table('article')->find($id);
        return view('edit',compact('data'));
    }
    public function update(Request $request){
        DB::table('article')->where('id',$request->id)->update([
            'name'=>$request->name]);
            return redirect('/');
    }
    public function insert(){
        return view('insert');
    }
    public function insert_query(Request $request){
        DB::table('article')->insert(["name"=>$request->name]);
            return redirect('/');
    }
}
