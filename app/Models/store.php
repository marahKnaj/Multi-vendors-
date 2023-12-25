<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;



    protected $fillable=['id', 'name', 'user_id', 'image', 'status','rating','category_id','address','description','subcategory_id','template'


];
    protected $table='stores';


    public function ProductCategory(){
        return $this->hasMany(ProductCategory::class);
    }

    public function user(){
        return $this->beLongsTo(User::class);
    }

    public function category(){
        return $this->beLongsTo(category::class);
    }
    public function subcategory(){
        return $this->beLongsTo(subcategory::class);
    }

}
