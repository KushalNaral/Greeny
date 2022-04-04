<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [

        'vendor_id',
        'title',
        'slug'
        ];


    public function vendors()
    {
        return $this->belongsTo(Vendors::class, 'vendor_id');
    }

}
