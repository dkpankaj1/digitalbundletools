<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        "order_id",
        "name",
        "email",
        "phone",
        "amount",
        "vendor",
        "status",
    ];
}
