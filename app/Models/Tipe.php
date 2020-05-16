<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipe extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'tipe';
    protected $primaryKey = 'idtipe';

    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];
}
