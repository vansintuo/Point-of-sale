<?php

namespace App\Models;

use Illuminate\Auth\Events\Failed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_role extends Model
{
    use HasFactory;
    protected $table='user_roles';
    protected $primaryKey = 'code';
    public $incrementing = false;
}