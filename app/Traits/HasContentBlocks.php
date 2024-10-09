<?php

namespace App\Traits;

use App\Models\ContentBlock;

trait HasContentBlocks
{
    // Define the polymorphic relationship
    public function contentBlocks()
    {
        return $this->morphMany(ContentBlock::class, 'blockable');
    }

    // Function to add a content block
    public function addContentBlock($type, $content)
    {
        return $this->contentBlocks()->create([
            'type' => $type,
            'content' => $content,
        ]);
    }
}
