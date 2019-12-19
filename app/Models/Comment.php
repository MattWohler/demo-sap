<?php

namespace App\Models;

use Containers\User\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Containers\Publisher\Containers\Deal\Models\Deal;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = [
        'body',
        'user_id',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function deal() : BelongsTo
    {
        return $this->belongsTo(Deal::class);
    }

    public function commentable() : MorphTo
    {
        return $this->morphTo();
    }
}
