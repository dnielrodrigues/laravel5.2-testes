<?php

// Class Sample extends Eloquent{

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     protected $fillable = [
//         'name', 'description', 'price', 'stock', 'status'
//     ];

//     /**
//      * The attributes that should be hidden for arrays.
//      *
//      * @var array
//      */
//     protected $hidden = [
//         // ... 
//     ];

//     /**
//      * ...
//      */
//     public function AllSamples(){
//         return self::all();
//     }

//     /**
//      * ...
//      */
//     public function saveUser(){
//         $input = Input::all();
//         $obj = new Sample();
//         $obj->fill($input);
//         $obj->save();
//         return $obj;
//     }

// }

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'price', 'stock', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // ... 
    ];
}
