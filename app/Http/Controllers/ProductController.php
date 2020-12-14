<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Buisness;
use App\Models\History;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    /**
     * Show the form for creating a new product related to buisness.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('pages.addproduct')->with('id',$id);
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
            'code'=>'bail|required|numeric',
            'type'=>'bail|required|string',
            'price'=>'bail|required|numeric',
        ]);
        $add =new Product;
        $add->buisness_id=$request->buisness_id;
        $add->title=$request->title;
        $add->code=$request->code;
        $add->type=$request->type;
        $add->price=$request->price;
        $add->save();
        //Decrementing the account balance of the related buisness upon successfull product creation.
        DB::table('accounts')->where('buisness_id',$request->buisness_id)->decrement('balance',$request->price);

        DB::table('history')->insert(['product'=>$request->title,'operation'=>'Added','time'=>\Carbon\Carbon::now()]);

        //redirecting to the view products page with the same buisness.
        return redirect()->route('viewproducts',$request->buisness_id)->with('success','Product added succesfully');
        //clearing add product form variables.
        $this->clear();

    }
    /**
     * Function for resetting the form variables.
     *
     * @return void
     */
    public function clear(){
        $this->title=null;
        $this->code=null;
        $this->type=null;
        $this->price=null;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id=null)
    {
        //Getting the products with the specified buisness id.
        $listpro=Buisness::find($id)->busproducts()->paginate(5);
        return view('pages.viewproduct')
                                        ->with('id',$id)
                                        ->with('listpro',$listpro);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::whereId($id)->delete();
        return redirect()->back();
    }


    /**
     * Function for incrementing the account balance of the related buisness when a product is sold.
     *
     * @param  mixed $id
     * @return void
     */
    public function buy($id)
    {
        $item=DB::table('products')->select('title','price')->where('id','=',$id)->get();
        $val=$item[0]->price;
        DB::table('accounts')->increment('balance',$val);
        DB::table('history')->insert(['product'=>$item[0]->title,'operation'=>'Sold','time'=>\Carbon\Carbon::now()]);

        return redirect()->back();
    }
}
