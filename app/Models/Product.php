<?php

namespace App\Models;

use App\Traits\HasCategory;
use App\Traits\HasUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use HasUser;
    use SoftDeletes;
    use HasCategory;


    protected $fillable = [
        'id',
        'user_id',
        'category_id',
        'name',
        'description',
        'price'
    ];
}

