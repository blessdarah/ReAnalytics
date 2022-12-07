<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "phone_number",
        "description",
        "email",
        "country",
        "address",
        "website"
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
