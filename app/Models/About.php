<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'technologies',
        'image',
    ];

    protected $casts = [
        'technologies' => 'array',
    ];

    /**
     * Get formatted technologies string.
     */
    public function getTechnologiesStringAttribute(): string
    {
        return is_array($this->technologies) ? implode(', ', $this->technologies) : '';
    }

    /**
     * Get the first active about record.
     */
    public static function getActive()
    {
        return static::where('is_active', true)->first();
    }
}
