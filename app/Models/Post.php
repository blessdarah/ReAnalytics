<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function statusTypes()
    {
        return [
            "draft" => "Draft",
            "published" => "Published",
            "archived" => "Archived",
        ];
    }

    /**
     * Return the url of the post varialbe in an seo friendly manner
     *
     * @return string
     */
    public function url()
    {
        return url("/blog/$this->id-" . Str::slug($this->title));
    }

    /**
     * Use the relationship to find all the tags
     *
     * @return collection|array of tags
     */
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
