<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryCar extends Model
{
    use HasFactory;

    protected $table = 'category_cars';
    protected $fillable = [
        'id', 
        'name', 
        'price', 
        'deleted_at',
    ];

    public function car()
    {
        return $this->hasMany(Car::class, 'cate_id', 'id');
    }
}
