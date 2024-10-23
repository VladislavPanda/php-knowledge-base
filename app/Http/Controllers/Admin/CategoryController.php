<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\SubCategoryRepositoryInterface;

class CategoryController extends Controller
{
    public function __construct(
        private SubCategoryRepositoryInterface $subCategoryRepository
    ) {
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index(int $id)
    {
        return view('admin.category.index')
            ->with('subCategories', $this->subCategoryRepository->findByCategoryId($id));
    }
}
