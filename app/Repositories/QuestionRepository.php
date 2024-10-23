<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Dto\QuestionDto;
use App\Models\Question;
use App\Models\SubCategory;
use App\Repositories\Contracts\QuestionRepositoryInterface;

class QuestionRepository implements QuestionRepositoryInterface
{
    /**
     * @param int $subCategoryId
     * @return QuestionDto[]
     */
    public function findBySubCategoryId(int $subCategoryId): array
    {
        return SubCategory::find($subCategoryId)
            ->questions
            ->map(fn (Question $question) => new QuestionDto($question->id, $question->content))
            ->toArray();
    }

    /**
     * @param int $id
     * @return QuestionDto
     */
    public function findByIdWithAcceptedAnswer(int $id): QuestionDto
    {
        $question = Question::where('id', $id)->with('acceptedAnswer')->first();

        return new QuestionDto(
            $question->id,
            $question->content,
            $question->acceptedAnswer?->content ?? 'Ответ не был сформирован',
            $question->acceptedAnswer?->english_content ?? 'Ответ не был сформирован',
        );
    }
}
