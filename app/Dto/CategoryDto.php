<?php

declare(strict_types=1);

namespace App\Dto;

final readonly class CategoryDto
{
    /**
     * @param int $id
     * @param string $title
     */
    public function __construct(
        public int $id,
        public string $title,
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
