<?php

declare(strict_types=1);

namespace App\Repositories\Contracts;

use App\Dto\QuestionDto;

interface QuestionRepositoryInterface
{
    /**
     * @param int $subCategoryId
     * @return QuestionDto[]
     */
    public function findBySubCategoryId(int $subCategoryId): array;

    /**
     * @param int $id
     * @return QuestionDto
     */
    public function findByIdWithAcceptedAnswer(int $id): QuestionDto;
}
