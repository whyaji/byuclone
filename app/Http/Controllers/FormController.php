<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index(){
        return view('dashboards.admins.form');
    }

    function add(Request $request){
        $request->validate([
            'package_id'=>'required',
            'name'=>'required',
            'value'=>'required',
            'active'=>'required',
            'price'=>'required',
            'group_id'=>'required'
        ]);

        $createdAt = now();

        $query = DB::table('packages')->insert([
            'package_id'=>$request->input('package_id'),
            'name'=>$request->input('name'),
            'value'=>$request->input('value'),
            'active'=>$request->input('active'),
            'price'=>$request->input('price'),
            'group_id'=>$request->input('group_id'),
            'created_at'=>$createdAt,
            'updated_at'=>$createdAt,
        ]);

        if ($query) {
            return back()->with('success','Data telah berhasil dimasukan');
        } else {
            return back()->with('fail','Ada yang salah');
        }
    }
}
