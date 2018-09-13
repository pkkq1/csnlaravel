<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/2018
 * Time: 3:38 PM
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use App\Library\Helpers;
use App\Repositories\Category\CategoryEloquentRepository;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryEloquentRepository $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }
    public function index1(Request $request, $sub) {
        $category = $this->categoryRepository->getCategoryParentByUrl($sub);
        if(!$category)
            return view('errors.404');
        return view('category.index', compact('category'));
    }
    public function index2(Request $request, $cat, $sub) {
        $category = $this->categoryRepository->getCategoryParentByUrl($cat);
        if(!$category)
            return view('errors.404');
        $category = $this->categoryRepository->getCategorySub($category->cat_id, $sub);
        if(!$category)
            return view('errors.404');
        return view('category.index', compact('category'));
    }

}