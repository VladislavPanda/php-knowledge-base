<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\QuestionRepositoryInterface;
use App\Repositories\Contracts\SubCategoryRepositoryInterface;

class SubCategoryController extends Controller
{
    public function __construct(
        private QuestionRepositoryInterface $questionRepository
    ) {
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index(int $id)
    {
        return view('admin.sub_category.index')
            ->with('questions', $this->questionRepository->findBySubCategoryId($id));
    }
}
