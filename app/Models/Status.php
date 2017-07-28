<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Status extends Model
{
    protected $table = "statuses";
    protected $fillable = ['description'];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class, 'statuses_id');
    }
}
