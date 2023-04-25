<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{
    use HasFactory;
    protected $fillable =[
        'no',
        'item_no',
        'unite_price',
        'product_code',
        'desciption_2',

    ];
}
