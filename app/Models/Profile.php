<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'country', 'city', 'phone', 'picture'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
