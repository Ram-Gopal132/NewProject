<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usermodel extends Model
{
    //use HasFactory;

     protected $table="form";

    // //primary key

    protected $primarykey ="id";

    //Fillable column
    //protected $fillable=array("name","email","image","phone","birth","gender","skill","country","city");
}
