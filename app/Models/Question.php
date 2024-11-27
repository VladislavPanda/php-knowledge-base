<?php

namespace App\Models;

use App\Contracts\ContentModelPolicyInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model implements ContentModelPolicyInterface
{
    use HasFactory, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'questions';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }

    /**
     * @return BelongsTo
     */
    public function acceptedAnswer()
    {
        return $this->belongsTo(AcceptedAnswer::class);
    }
}
