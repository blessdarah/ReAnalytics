<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    /**
     * Return the url of the post varialbe in an seo friendly manner
     *
     * @return string
     */
    public function url()
    {
        return url("/our-services/$this->id-" . Str::slug($this->name));
    }

    protected $guarded = [];
}