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

class BxhController extends Controller
{
    protected $categoryListenRepository;

    public function __construct(CategoryEloquentRepository $categoryListenRepository) {
        $this->categoryListenRepository = $categoryListenRepository;
    }
    public function now(Request $request) {
        $cacheBxh = 'def_hot_today';
        $urlBxh = 'nhac-hot';
        $titleBxh = 'Bảng xếp hạng hot trong tuần';
        $category = $this->categoryListenRepository->getAllParentCategory(0, [['cat_id', '!=', 1]])->toArray();
        $catVideo = $this->categoryListenRepository->getAllCatId(1, [['cat_level', '!=', 0]])->toArray();
        return view('bxh.index', compact('bxh', 'urlBxh', 'category', 'catVideo', 'titleBxh', 'cacheBxh'));
    }
    public function month(Request $request, $month, $cat = false) {
        $cacheBxh = 'def_hot_today';
        $urlBxh = 'bang-xep-hang/bang-xep-hang-thang-'.$month;
        $titleBxh = 'Bảng xếp hạng hot trong tháng ' . $month;
        $category = $this->categoryListenRepository->getAllParentCategory(0, [['cat_id', '!=', 1]])->toArray();
        $catVideo = $this->categoryListenRepository->getAllCatId(1, [['cat_level', '!=', 0]])->toArray();
        return view('bxh.index', compact('bxh', 'urlBxh', 'category', 'catVideo', 'titleBxh', 'cacheBxh'));
    }
    public function year(Request $request, $year, $cat = false) {
        $cacheBxh = 'def_hot_today';
        $urlBxh = 'bang-xep-hang/bang-xep-hang-nam-'.$year;
        $titleBxh = 'Bảng xếp hạng hot trong năm '.$year;
        $category = $this->categoryListenRepository->getAllParentCategory(0, [['cat_id', '!=', 1]])->toArray();
        $catVideo = $this->categoryListenRepository->getAllCatId(1, [['cat_level', '!=', 0]])->toArray();
        return view('bxh.index', compact('bxh', 'urlBxh', 'category', 'catVideo', 'titleBxh', 'cacheBxh'));
    }
    public function cat(Request $request, $cat, $sub) {
        return view('bxh.cat', compact('bxh'));
    }
}