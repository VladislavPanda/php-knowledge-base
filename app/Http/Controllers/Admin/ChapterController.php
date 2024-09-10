<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\ChapterRepositoryInterface;

class ChapterController extends Controller
{
    /**
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(
        private CategoryRepositoryInterface $categoryRepository,
    ) {
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index(int $chapterId)
    {
        return view('admin.chapter.index')->with('categories', $this->categoryRepository->findByChapterId($chapterId));
    }
}
