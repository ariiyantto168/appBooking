<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'orders';
    protected $primaryKey = 'idorders';

    protected $fillable = [
        'name','harga','detail','alamat','description'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function images()
    {
        return $this->belongsToMany('App\Models\Images','idimages');
    }

}
