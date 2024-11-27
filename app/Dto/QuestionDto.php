<?php

declare(strict_types=1);

namespace App\Dto;

readonly final class QuestionDto
{
    public function __construct(
        private int $id,
        private string $content,
        private string $englishContent = 'Ответ не был сформирован',
        private ?string $acceptedAnswerContent = 'Ответ не был сформирован',
        private ?string $acceptedAnswerEnglishContent = 'Ответ не был сформирован',
    ) {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getEnglishContent(): string
    {
        return $this->englishContent;
    }

    /**
     * @return string|null
     */
    public function getAcceptedAnswerContent(): ?string
    {
        return $this->acceptedAnswerContent;
    }

    /**
     * @return string|null
     */
    public function getAcceptedAnswerEnglishContent(): ?string
    {
        return $this->acceptedAnswerEnglishContent;
    }
}
