<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //Declares the table name.
    protected $table='products';

    public $timestamps=true;

    //Mass Assignment.
    protected $fillable=['title','code','type','price'];

    /**
     * Defines the relation with buisnesses table.
     *
     * @return void
     */
    public function productbus(){
        return $this->belongsTo('App\Models\Buisness');
    }
}
