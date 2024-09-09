<?php

declare(strict_types=1);

namespace App\Dto;

readonly final class ChapterDto
{
    public function __construct(
        private int $id,
        private string $title
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
    public function getTitle(): string
    {
        return $this->title;
    }
}
