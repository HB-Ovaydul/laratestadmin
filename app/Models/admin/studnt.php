<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class studnt extends Model
{
    use HasFactory , Notifiable;
    protected $guarded = [];
}
