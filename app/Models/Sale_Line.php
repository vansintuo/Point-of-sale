<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale_Line extends Model
{
    use HasFactory;
    protected $table = 'sales_lines';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
