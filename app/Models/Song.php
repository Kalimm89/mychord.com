<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Artist;
use App\Models\Style;

class Song extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'chord', 'video', 'artist_id'];

   

    public function artist() {
        return $this->belongsTo(Artist::class);
    }

    public function styles() {
        return $this->belongsToMany(Style::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
