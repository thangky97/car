<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    protected $fillable = ['id', 'name', 'email', 'phone', 'content', 'car_id'];

    public function car(){
        return $this->belongsTo(Car::class, 'car_id');
    }
}
