<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackagesController extends Controller
{
    public function index()
    {
        $data = array(
            'list'=>DB::table('packages')->get()
        );
        return view('dashboards.admins.packages', $data);
    }
}
