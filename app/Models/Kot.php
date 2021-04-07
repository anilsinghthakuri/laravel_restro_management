<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kot extends Model
{
    use HasFactory;
    protected $table  = 'kots';
    protected $primaryKey = 'kot_id';

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','product_id');
    }
}
