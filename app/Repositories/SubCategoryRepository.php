<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Dto\SubCategoryDto;
use App\Models\SubCategory;
use App\Repositories\Contracts\SubCategoryRepositoryInterface;

class SubCategoryRepository implements SubCategoryRepositoryInterface
{
    /**
     * @return SubCategory[]
     */
    public function findAll(): array
    {
        return SubCategory::paginate()
            ->map(fn(SubCategory $subCategory) => new SubCategoryDto($subCategory->id, $subCategory->title))
            ->toArray();
    }

    /**
     * @param int $categoryId
     * @return array|SubCategoryDto[]
     */
    public function findByCategoryId(int $categoryId): array
    {
        return SubCategory::where('category_id', $categoryId)
            ->paginate()
            ->map(fn(SubCategory $subCategory) => new SubCategoryDto($subCategory->id, $subCategory->title))
            ->toArray();
    }
}
