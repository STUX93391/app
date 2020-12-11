<?php

namespace App\Http\Controllers;
use App\Models\Buisness;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BuisnessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Buisness::all();
        return view('dashboard',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addbuisness');
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
            'title'=>'required',
            'address'=>'required',
            'contact'=>'required|max:11'
        ]);
        //locating the authenticated user.
        $uid = auth()->user()->id;
        //creating buisness while getting the buisness id.
        $busid=DB::table('buisnesses')->insertGetId(['title'=>$request->title,'address'=>$request->address,'contact'=>$request->contact,'user_id'=>$uid]);
        return redirect()->route('addaccount',$busid);
        $this->clearVars();
    }
    /**
     * Clearing add buisness form variables.
     *
     * @return void
     */
    public function clearVars(){
        $this->title=null;
        $this->address=null;
        $this->contact=null;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('buisnesses')->whereId($id)->delete();
        return redirect()->route('dashboard')->with('success','Buisness Deleted Successfully');
    }
}
