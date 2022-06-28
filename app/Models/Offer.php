<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    // the modle equl the element of database   
    
    protected $table='offers';
    protected $fillable=['name','price','qty','details','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
    public $timestamp=false;
    


}
