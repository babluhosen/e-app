<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $table ='categorybrands';
    protected $fillable=[
        'brand_name',
        'slug',
        'status',
    ];
}
