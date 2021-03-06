<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    use HasFactory;

    protected $table = 'order_product';
    protected $fillable = ['order_id', 'product_id', 'user_id', 'name', 'price', 'units', 'state'];
}
