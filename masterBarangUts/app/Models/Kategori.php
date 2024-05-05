<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'firstName',
        'Itemdescription',
        'price',
        'kategori_id',
    ];

    public function category()
    {
        return $this->belongsTo(Kategori::class);
    }
}
