<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategories extends Model
{
    use HasFactory;
    protected $table='item_categorys';
    protected $primaryKey = 'code';
    public $incrementing = false;
    public function ItemGroup(){
        return $this->belongsTo(\App\ItemGroup::class);
    } 
}

