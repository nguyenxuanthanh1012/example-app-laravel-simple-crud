<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    # ? không biết sao lại bắt buộc phải khai báo kiểu này
    protected $fillable = [
        'name',
        'qty',
        'price',
        'description'
    ];
}
