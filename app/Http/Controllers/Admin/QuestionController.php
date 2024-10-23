<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\QuestionRepositoryInterface;

class QuestionController extends Controller
{
    public function __construct(
        private QuestionRepositoryInterface $questionRepository
    ) {
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function show(int $id)
    {
        return view('admin.question.index')
            ->with('question', $this->questionRepository->findByIdWithAcceptedAnswer($id));
    }
}
