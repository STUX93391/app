<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    //Declares the table name.
    protected $table='accounts';

    public $timestamps=true;

    //Declaries the mass assignment
    protected $fillable=['title','type','number','balance'];

    /**
     *Defines the realtion with buisnesses table.
     *
     * @return void
     */
    public function accountbus(){
        return $this->belongsTo('App\Models\Buisness');
    }
}
