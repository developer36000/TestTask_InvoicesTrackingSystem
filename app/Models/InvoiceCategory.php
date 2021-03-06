<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceCategory extends Model
{

    public $timestamps = false;
    
    protected $fillable = [
        'name'
    ];

    public function invoices()
    {
        return $this->hasMany('\App\Models\Invoice');
    }
}
