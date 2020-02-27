<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id','state','types','data_name','data_count','buy_price','buy_date','expiration_date'
    ];

    protected $guarded = ['pyament_id'];

}