<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Internal extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'internal';
    protected $primaryKey = 'idinternal';

    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];
}
