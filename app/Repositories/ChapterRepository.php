<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Dto\ChapterDto;
use App\Models\Chapter;
use App\Repositories\Contracts\ChapterRepositoryInterface;

class ChapterRepository implements ChapterRepositoryInterface
{
    /**
     * @return array
     */
    public function findAll(): array
    {
        return Chapter::paginate()
            ->map(fn (Chapter $chapter) => new ChapterDto($chapter->id, $chapter->title))
            ->toArray();
    }
}
