<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bills';
    protected $primaryKey = 'bill_id';

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','customer_id');
    }
}
