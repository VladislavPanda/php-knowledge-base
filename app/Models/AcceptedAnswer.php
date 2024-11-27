<?php

namespace App\Models;

use App\Contracts\ContentModelPolicyInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcceptedAnswer extends Model implements ContentModelPolicyInterface
{
    use HasFactory, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'accepted_answers';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function question()
    {
        return $this->hasOne(Question::class);
    }
}
