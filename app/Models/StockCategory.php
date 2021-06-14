<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockCategory extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $fillable = [
        'id',
        'description',
        'type',
        'stock_account',
    ];

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

}
