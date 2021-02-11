<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactLink extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Return the member or team profile that has this contact links
     *
     * @return Member::class
     */
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}