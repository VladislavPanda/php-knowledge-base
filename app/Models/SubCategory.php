<?php

declare(strict_types=1);

namespace App\Models;

use App\Contracts\ContentModelInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model implements ContentModelInterface
{
    use HasFactory, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'sub_categories';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return HasMany
     */
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
