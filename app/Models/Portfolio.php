<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'description',
        'technologies',
        'client',
        'completion_date',
        'web_url',
        'admin_url',
        'android_url',
        'ios_url',
        'image',
        'is_featured',
        'is_active',
        'order',
    ];

    protected $casts = [
        'technologies' => 'array',
        'completion_date' => 'date',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Scope a query to only include active portfolios.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include featured portfolios.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope a query to filter by category.
     */
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Get formatted technologies string.
     */
    public function getTechnologiesStringAttribute(): string
    {
        return is_array($this->technologies) ? implode(', ', $this->technologies) : '';
    }
}
