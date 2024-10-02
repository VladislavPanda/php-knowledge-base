<?php

declare(strict_types=1);

namespace App\Repositories\Contracts;

use App\Dto\SubCategoryDto;
use App\Models\SubCategory;

interface SubCategoryRepositoryInterface
{
    /**
     * @return SubCategory[]
     */
    public function findAll(): array;

    /**
     * @param int $categoryId
     * @return SubCategoryDto[]
     */
    public function findByCategoryId(int $categoryId): array;
}
