<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'full_description',
        'icon',
        'image',
        'features',
        'starting_price',
        'price_unit',
        'is_featured',
        'is_active',
        'order',
    ];

    protected $casts = [
        'features' => 'array',
        'starting_price' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Scope a query to only include active services.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include featured services.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope a query to order services by order field.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
