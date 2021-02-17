<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Library\Helpers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Repositories\Article\ArticleRepository;
use App\Repositories\ArticleTags\ArticleTagsRepository;
use App\Repositories\ArticleView\ArticleViewRepository;
use Backpack\NewsCRUD\app\Models\Tag;
use DB;

class DetailController extends Controller
{
    protected $articleRepository;
    protected $articleViewRepository;
    protected $articleTagsRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ArticleRepository $artistRepository, ArticleViewRepository $articleViewRepository, ArticleTagsRepository $articleTagsRepository)
    {
        $this->articleRepository = $artistRepository;
        $this->articleViewRepository = $articleViewRepository;
        $this->articleTagsRepository = $articleTagsRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $slug, $id)
    {
        $article = $this->articleRepository->findOnlyPublished($id);
        if(!$article)
            return view('news.errors.404');
        // +1 view
        if(Helpers::sessionCountTimesMusic($article->id, 'news')){
            $this->articleViewRepository->incrementView($article->id);
        }
        $articleTags = [];
        $tags = $article->tags()->pluck('csn_tags.id')->toArray();
        if(count($tags) > 0) {
            $articleTags = $this->articleTagsRepository->getModel()::join("csn_articles","csn_articles.id","=","csn_article_tag.article_id")
                ->select(DB::raw('DISTINCT csn_articles.id, csn_articles.category_id, csn_articles.title, csn_articles.slug, csn_articles.date_publish, csn_articles.short_content, csn_articles.image, csn_articles.article_by_user_name, csn_articles.article_by_user_id'))
                ->where('csn_articles.status', 'PUBLISHED')
                ->where('csn_article_tag.article_id', '!=', $article->id)
                ->whereIn('csn_article_tag.tag_id', $tags)
                ->whereDate('csn_articles.date_publish', '<=', date("Y-m-d h:i"))
                ->orderBy('csn_articles.date_publish', 'desc')
                ->limit(20)
                ->get();
        }
        return view('news.detail.index', compact('article', 'articleTags'));
    }
    public function searchTags(Request $request)
    {
        $search_term = $request->input('term');
        $results = [];
        if ($search_term)
        {
            $result = Tag::select('name', 'id')
                ->where(function($q) use ($search_term) {
                    $q->where('name', 'LIKE', '%'.$search_term.'%')
                        ->orWhere('slug', 'LIKE', '%'.$search_term.'%');
                })
                ->limit(10)->get()->toArray();
        }
        else
        {
            $result = Tag::select('name', 'id')
                ->limit(10)->get()->toArray();
        }
        return response($result);
    }
    public function rss() {
        $blog = $this->articleRepository
            ->getModel()::select('id', 'slug', 'title', 'short_content', 'content', 'image', 'date_publish', 'created_at')->whereDate('date_publish', '<=', date("Y-m-d h:i"))
            ->where('status', STATUS_PUBLISHED)->orderBy('date_publish', 'desc')->limit(20)->get();
        return view('news.rss', [
            'blogs' => $blog,
            'title' => 'Góc Sao Việt',
        ]);
    }
}
