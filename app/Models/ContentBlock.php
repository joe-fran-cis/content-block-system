<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentBlock extends Model
{
    // Add the fillable properties
    protected $fillable = [
        'type',         // Allow mass assignment for 'type'
        'content',      // Allow mass assignment for 'content'
        'blockable_id', // Allow mass assignment for polymorphic relation
        'blockable_type', // Allow mass assignment for polymorphic relation
    ];

    // Define the relationship with the Page model
    public function blockable()
    {
        return $this->morphTo();
    }
}
