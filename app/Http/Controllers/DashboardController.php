<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use Illuminate\Http\Request;
use PDO;

class DashboardController extends Controller
{
    /**
     * Displaying all the buisness and their related accounts.
     *
     * @return void
     */
    public function view()
    {
        $all = DB::table('buisnesses')
                                    ->join('accounts','buisnesses.id',"=",'accounts.buisness_id')
                                    ->simplePaginate(10);

        return view('dashboard')->with('all',$all);
    }

    function show(){
        return ['user'=>'rippor'];
    }
}
