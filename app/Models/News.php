<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['news_category_id', 'title', 'slug', 'description', 'status', 'date', 'photo'];

    public function news_Category(){
        return $this->belongsTo(NewsCategory::class);
    }
}
