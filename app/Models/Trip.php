<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable=['name','phone_number','transaction_id','price','shift','location','date','total_seat','available_seat'];
}
