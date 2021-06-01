<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    protected $table = 'products';

    public function allReviews() {
        return $this->hasMany('\App\Models\Review', 'product_name', 'name');
    }
}
