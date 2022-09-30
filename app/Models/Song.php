<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Song extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'content', 'artist_id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function styles() {
        return $this->belongsToMany(Style::class);
    }

    public function artists() {
        return $this->belongsTo(Artist::class);
    }
}
