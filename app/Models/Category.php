<?php

namespace App\Models;

use App\Contracts\ContentModelPolicyInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model implements ContentModelPolicyInterface
{
    use HasFactory, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'categories';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
