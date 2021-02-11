<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Return the url of the post varialbe in an seo friendly manner
     *
     * @return string
     */
    public function url()
    {
        return url("/tutorials/$this->id-" . Str::slug($this->title));
    }
}