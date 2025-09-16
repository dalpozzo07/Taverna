<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id', 'street', 'number', 'complement', 
        'district', 'city', 'state', 'country', 'zip_code', 'is_default'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
