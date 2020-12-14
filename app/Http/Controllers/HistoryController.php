<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function history(){
        $data = DB::table('history')->select('product','operation','time')->simplePaginate(10);
        return view('pages.history')->with('data',$data);
    }
}
