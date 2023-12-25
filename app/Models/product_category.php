<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'storeId',
        'status'

      ];
      public function store(){
        return $this->belongsTo(store::class);
    }
    
}
