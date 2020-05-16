<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class External extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'external';
    protected $primaryKey = 'idexternal';

    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];
}
