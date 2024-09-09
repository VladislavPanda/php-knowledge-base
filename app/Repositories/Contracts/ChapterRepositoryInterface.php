<?php

declare(strict_types=1);

namespace App\Repositories\Contracts;

interface ChapterRepositoryInterface
{
    /**
     * @return array
     */
    public function findAll(): array;
}
