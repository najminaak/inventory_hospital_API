<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospitals extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
    ];

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
}
