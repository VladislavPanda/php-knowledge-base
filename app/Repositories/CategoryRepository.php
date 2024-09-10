<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Dto\CategoryDto;
use App\Models\Category;
use App\Models\Chapter;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * @param int $chapterId
     * @return array
     */
    public function findByChapterId(int $chapterId): array
    {
        return Chapter::find($chapterId)
            ->categories
            ->map(fn (Category $category) => new CategoryDto($category->id, $category->title))
            ->toArray();
    }
}
