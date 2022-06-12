<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services() {
        return $this->belongsToMany(Service::class);
    }

    public function posts() {
        return $this->belongsToMany(Post::class);
    }

    public function events() {
        return $this->belongsToMany(Event::class);
    }
}
