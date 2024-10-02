<?php

declare(strict_types=1);

namespace App\Repositories\Contracts;

use App\Models\SubCategory;

interface SubCategoryRepositoryInterface
{
    /**
     * @return SubCategory[]
     */
    public function findAll(): array;
}
