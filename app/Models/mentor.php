<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class mentor extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'mentor';
    protected $fillable = [
        'name',
        'email',
        'password',
        'id_status',
        'profile_pic'
    ];
}
