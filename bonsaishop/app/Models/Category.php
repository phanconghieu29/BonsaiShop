<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = ['cat_name', 'cat_slug'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function addCategory($data){
        \DB::insert('insert into category(cat_name, cat_slug) values (?, ?)', $data);
    }
}
