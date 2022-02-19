<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconInvoice extends Model
{
    use HasFactory;
    protected $primaryKey = 'invoice_no';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['invoice_no', 'payer_name', 'bank_name', 'account_no', 'account_name', 'nominal', 'creator_name', 'status'];
}
