<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'order',
        'qty',
        'price',
        'total',
        'order_date',
        'due_date',
        'status'
    ];
    public function getOrderDateAttribute()
    {
        return Carbon::parse($this->attributes['order_date'])->translatedFormat('l, d M y');
    }
    public function getDueDateAttribute()
    {
        return Carbon::parse($this->attributes['due_date'])->translatedFormat('l, d M y');
    }
}
