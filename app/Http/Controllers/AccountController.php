<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Buisness;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Arr;


class AccountController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addaccount');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'bail|required|string',
            'type'=>'bail|required|string',
            'number'=>'bail|required|integer|unique:accounts,number',
            'balance'=>'bail|required|integer',
        ]);

         $store= new Account;
         $store->account_title=$request->title;
         $store->type=$request->type;
         $store->number=$request->number;
         $store->balance=$request->balance;
         $store->buisness_id=session('addBuisnessId');
         $store->save();

         return redirect('dashboard')->with('success','Buisness Created Successfully.');
    }

    /**
     * Clear variables.
     *
     * @return void
     */
    public function reset(){
        $this->title=null;
        $this->type=null;
        $this->number=null;
        $this->balance=null;
    }

}
