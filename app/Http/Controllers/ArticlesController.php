<?php

namespace App\Http\Controllers;

use App\Criteria\SearchCriteria;
use App\Http\Requests;
use App\Http\Requests\ArticlesCreateRequest;
use App\Http\Requests\ArticlesUpdateRequest;
use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\TagRepository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;


class ArticlesController extends Controller
{

    /**
     * @var ArticleRepository
     */
    private $article;
    /**
     * @var CategoryRepository
     */
    private $category;
    /**
     * @var TagRepository
     */
    private $tag;

    public function __construct(ArticleRepository $article, CategoryRepository $category, TagRepository $tag)
    {
        $this->article = $article;
        $this->category = $category;
        $this->tag = $tag;

        $this->middleware('auth')->only(['create', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = '/api/articles/';
        if (\Request::input('query')) {
            $url = '/api/articles/?query=' . \Request::input('query');
        }

        if (\Request::is('api/*')) {
            $articles = $this->article->with(['comments'])->paginate(10);
            return response()->json([
                'data' => $articles,
            ]);
        }
        \JavaScript::put(['itemsUrl' => $url]);
        return view('articles.index');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $this->article->pushCriteria(new SearchCriteria(request()->input('query')));
        $articles = $this->article->all();
        return response()->json([
            'data' => $articles,
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $submitButtonText = 'Create';
        $categories = $this->category->pluck('name', 'id');
        $tags = $this->tag->pluck('name', 'id');
        return view('articles.create', compact('submitButtonText', 'categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ArticlesCreateRequest $form
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ArticlesCreateRequest $form)
    {
        $form->persist();

        return redirect('/')->with('message', 'Запись создана');
    }



    /**
     * Display the specified resource.
     *
     * @param  string $slug
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug)
    {
        $article = $this->article->find($id);
        if (is_null($article)) {
            abort(404, 'Запись не найдена.');
        }
        return view('articles.show', compact('article'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = $this->article->find($id);
        $article->tags_id = $article->tags()->pluck('id')->toArray();
        $submitButtonText = 'Update';
        $categories = $this->category->pluck('name', 'id');
        $tags = $this->tag->pluck('name', 'id');
        return view('articles.edit', compact('submitButtonText', 'article', 'categories', 'tags'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ArticlesUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ArticlesUpdateRequest $form, $id)
    {
        $form->persist($id);

        return redirect('/')->with('message', 'Запись отредактирована');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->article->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Articles deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Articles deleted.');
    }
}
