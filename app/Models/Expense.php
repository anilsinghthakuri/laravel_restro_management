<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $table = 'expenses';
    protected $primaryKey = 'expense_id';

    public function expensescategroy()
    {
        return $this->belongsTo(ExpenseCategory::class,'expense_category_id','expense_category_id');
    }
}
