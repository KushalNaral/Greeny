<?php

namespace App\Models;

use App\Http\Controllers\CategoriesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
        protected $fillable = [
            'id' ,
            'category_id',
            'vendor_id',
            'product_name',
            'desc' ,
            'current_price' ,
            'old_price' ,
            'availability_status'
        ];


    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function vendors()
    {
        return $this->hasMany(Vendors::class, 'vendor_id');
    }

    public function category()
    {
        return $this->belongsTo(CategoriesController::class, 'category_id');
    }

    /*public static function boot()
    {
        parent::boot();

        static::created(function ($products) {
            $product->update(['slug' => $products->title]);
        });
    }*/




}
