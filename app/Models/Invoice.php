<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ["client_id", "description", "code", "name", "status", "total"];

    public static function Statuses(): array
    {
        return ["pending", "paid", "cancelled"];
    }

    public function client()
    {
        return $this->belongsTo(Invoice::class);
    }
}
