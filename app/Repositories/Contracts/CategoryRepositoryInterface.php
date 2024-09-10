<?php

declare(strict_types=1);

namespace App\Repositories\Contracts;

interface CategoryRepositoryInterface
{
    /**
     * @param int $chapterId
     * @return array
     */
    public function findByChapterId(int $chapterId): array;
}
