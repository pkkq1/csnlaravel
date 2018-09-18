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

class SearchController extends Controller
{
    protected $categoryListenRepository;

    public function __construct(CategoryEloquentRepository $categoryListenRepository) {
        $this->categoryListenRepository = $categoryListenRepository;
    }
    public function index(Request $request) {
        $result = [];
        $titleSearch = 'HELlo | ';
        return view('search.index', compact('result', 'titleSearch'));
    }

}