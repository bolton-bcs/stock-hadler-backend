<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'supplier_id',
        'supplier_name',
        'supplier_address',
        'supplier_number',
        'supplier_email',
        'products'

    ];
}
