<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Return the contact links for this member or team profile
     * @return ContactLink::class
     */
    public function links()
    {
        return $this->hasOne(ContactLink::class);
    }
}