<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Sanctum\HasApiTokens;

class Queve extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = 'queves';

    protected $fillable = [
        'user_id',
        'idState',
        'nss',
        'status',
    ]; 

    public $timestamps = false;

}
