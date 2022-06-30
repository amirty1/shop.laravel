<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent'
    ];

    public function child()
    {

        return $this->hasMany(Category::class , 'parent' , 'id');
    }


    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function categories()
    {

        return $this->belongsToMany(Category::class);
    }
}
