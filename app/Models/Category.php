<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services() {
        return $this->hasMany(Service::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function events() {
        return $this->hasMany(Event::class);
    }
}
