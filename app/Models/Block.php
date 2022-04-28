<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin Eloquent
 */
class Block extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'starts_at',
        'ends_at',
        'forgiving'
    ];

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * @return BelongsToMany
     */
    public function tasks(): BelongsToMany
    {
        return $this->belongsToMany(Task::class, 'task_block', 'block_id', 'task_id');
    }
}
