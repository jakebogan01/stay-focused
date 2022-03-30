<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use softDeletes;

    /**
     * @return BelongsToMany
     */
    public function blocks(): BelongsToMany
    {
        return $this->belongsToMany(Block::class);
    }

}
