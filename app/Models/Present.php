<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Present extends Model
{
    protected $fillable = [
        'name',
        'store',
        'size',
        'color',
        'link',
        'price',
        'purchased',
        'parent'
    ];

    protected $casts = [
      'name' => 'string',
      'store' => 'string',
      'size' => 'string',
      'color' => 'string',
      'link' => 'string',
      'purchased' => 'boolean',
      'parent' => 'boolean',
    ];

    public function kid(): BelongsTo
    {
        return $this->belongsTo(Kid::class);
    }
}
