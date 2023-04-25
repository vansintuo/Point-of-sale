<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale_Headers extends Model
{
    use HasFactory;
    protected $table='sales_headers';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
