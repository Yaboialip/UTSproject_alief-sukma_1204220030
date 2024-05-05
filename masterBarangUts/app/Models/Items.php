<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = [
        'firstName',
        'Itemdescription',
        'price',
        'kategori_id',
    ];

    public function category()
    {
        return $this->belongsTo(Items::class);
    }
}
