<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
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
        return url("/our-projects/$this->id-" . Str::slug($this->name));
    }

    public function formatDate($date_string)
    {
        $date = new Carbon($date_string);
        return $date->toFormattedDateString();
    }
}

