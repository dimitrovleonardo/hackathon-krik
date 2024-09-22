<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable = [
        'user_id',         // Foreign key to users table
        'title',           // Title of the project
        'description',     // Project description
        'project_goal',    // Project goal description
        'for_whom',        // Target audience or for whom the project is
        'category_id',     // Foreign key to categories table
        'starting_at',     // Project start date
        'ending_at',       // Project end date
        'is_active',       // Whether the project is active or not
        'is_featured',     // Whether the project is featured or not
    ];
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('project_images')
            ->useDisk('public');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $casts = [
        'starting_at' => 'datetime',
    ];
}
