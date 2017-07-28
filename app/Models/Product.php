<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Status;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['name','description'];
    public $timestamps = false;

    public function status()
    {
        return $this->belongsTo(Status::class, 'statuses_id');
    }
}
