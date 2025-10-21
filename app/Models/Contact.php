<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];

    /**
     * Scope a query to only include unread contacts.
     */
    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    /**
     * Scope a query to only include read contacts.
     */
    public function scopeRead($query)
    {
        return $query->where('is_read', true);
    }

    /**
     * Mark the contact as read.
     */
    public function markAsRead(): bool
    {
        return $this->update(['is_read' => true]);
    }

    /**
     * Mark the contact as unread.
     */
    public function markAsUnread(): bool
    {
        return $this->update(['is_read' => false]);
    }
}
