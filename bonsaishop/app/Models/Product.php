<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'pro_name', 'price', 'image', 'describe', 'quantity', 'pro_slug', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getAllProductsAdmin(){
        $products = DB::table('products')
                    ->join('category', 'products.category_id', '=', 'category.id')
                    ->select('products.*', 'category.cat_name')
                    ->orderBy('products.id')
                    ->paginate(10);

        return $products;
    }
}
