<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['name',
    'ProductCategoryId',
    'status',
    'photo',
    'description',
    'price',
    'hasoffer',
    'discount',
    'Expdate',
    'quantity'



    ];

    public function ProductCategory(){
        return $this->belongsTo(ProductCategory::class);
    }
}
