<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buisness extends Model
{
    use HasFactory;
    //Declares the table name
    protected $table='buisnesses';

    public $timestamps=true;

    //Mass assignment.
    protected $fillable=['title','address','contact'];

    /**
         * Defines the relation
         * with products table.
         *
         * @return void
         */
        public function busproducts(){
            return $this->hasMany('App\Models\Product');
         }

        /**
         * Defines the relation with accounts table.
         *
         * @return void
         */
        public function busaccount(){
            return $this->hasOne('App\Models\Account');
        }
        /**
         * Defines the relation with users table.
         *
         * @return void
         */
        public function buisnessuser(){
            return $this->belongsTo('App\Models\User');
        }
}
