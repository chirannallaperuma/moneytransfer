<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferModel extends Model
{
    protected $table = 'transfers';
    protected $fillable = ['full_name','mobile_number','amount'];
}
