<?php

namespace App\Models;

use App\Contracts\ContentModelInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chapter extends Model implements ContentModelInterface
{
    use HasFactory, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'chapters';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
