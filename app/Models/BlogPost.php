<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'gallery_images',
        'author_name',
        'author_image',
        'category_id',
        'tags',
        'status',
        'reading_time',
        'views_count',
        'is_featured',
        'allow_comments',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'tags' => 'array',
        'gallery_images' => 'array',
        'is_featured' => 'boolean',
        'allow_comments' => 'boolean',
        'reading_time' => 'integer',
        'views_count' => 'integer',
    ];

    /**
     * Scope a query to only include published posts.
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                    ->where('published_at', '<=', now());
    }

    /**
     * Scope a query to order posts by published date.
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('published_at', 'desc');
    }

    /**
     * Scope a query to filter by status.
     */
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Get the category that the blog post belongs to.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the tags as an array for easy access
     */
    public function getTagsArrayAttribute()
    {
        if (is_string($this->tags)) {
            return json_decode($this->tags, true) ?? [];
        }
        return $this->tags ?? [];
    }

    /**
     * Get the author name (alias for author_name)
     */
    public function getAuthorAttribute()
    {
        return $this->author_name;
    }

    /**
     * Get the views count (alias for views_count)
     */
    public function getViewsAttribute()
    {
        return $this->views_count;
    }

    /**
     * Calculate estimated reading time based on content
     */
    public function getReadingTimeAttribute()
    {
        if ($this->attributes['reading_time']) {
            return $this->attributes['reading_time'];
        }

        // Calculate reading time (average 200 words per minute)
        $wordCount = str_word_count(strip_tags($this->content));
        return max(1, ceil($wordCount / 200));
    }

    /**
     * Increment the views counter
     */
    public function incrementViews()
    {
        $this->increment('views_count');
    }
}
