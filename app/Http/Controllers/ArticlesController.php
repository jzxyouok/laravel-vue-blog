<?php

namespace App\Http\Controllers;

use App\Criteria\SearchCriteria;
use App\Http\Requests;
use App\Http\Requests\ArticlesCreateRequest;
use App\Http\Requests\ArticlesUpdateRequest;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;


class ArticlesController extends Controller
{

    /**
     * @var ArticleRepository
     */
    protected $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // \App\Entities\Article::where('id', '>', 0)->delete();
        // factory(\App\Entities\Article::class, 50)->create([
        //     'category_id' => factory(\App\Entities\Category::class)->create()->id,
        //     'user_id' => factory(\App\Entities\User::class)->create()->id,
        // ]);
        // die('OK');
        $url = '/api/articles/';
        if (\Request::input('query')) {
            $url = '/api/articles/?query=' . \Request::input('query');
        }

        if (\Request::is('api/*')) {
//            $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
            $articles = $this->repository->paginate(10);
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
        $this->repository->pushCriteria(new SearchCriteria(request()->input('query')));
        $articles = $this->repository->all();
        return response()->json([
            'data' => $articles,
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article = $this->repository;
        return view('articles.create', compact('article'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ArticlesCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ArticlesCreateRequest $request)
    {
        $article = $this->repository->create($request->all());

        $response = [
            'message' => 'Articles created.',
            'data'    => $article->toArray(),
        ];

        if ($request->wantsJson()) {

            return response()->json($response);
        }

        return redirect()->back()->with('message', $response['message']);
    }



    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $article,
            ]);
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

        $article = $this->repository->find($id);

        return view('articles.edit', compact('article'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ArticlesUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ArticlesUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $article = $this->repository->update($id, $request->all());

            $response = [
                'message' => 'Articles updated.',
                'data'    => $article->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
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
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Articles deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Articles deleted.');
    }
}
