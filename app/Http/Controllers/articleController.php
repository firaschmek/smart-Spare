<?php

namespace App\Http\Controllers;

use App\DataTables\articleDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatearticleRequest;
use App\Http\Requests\UpdatearticleRequest;
use App\Repositories\articleRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class articleController extends AppBaseController
{
    /** @var  articleRepository */
    private $articleRepository;

    public function __construct(articleRepository $articleRepo)
    {
        $this->articleRepository = $articleRepo;
    }

    /**
     * Display a listing of the article.
     *
     * @param articleDataTable $articleDataTable
     * @return Response
     */
    public function index(articleDataTable $articleDataTable)
    {
        return $articleDataTable->render('articles.index');
    }

    /**
     * Show the form for creating a new article.
     *
     * @return Response
     */
    public function create()
    {
        return view('articles.create')->with('categorie',$this->articleRepository->allCategorie());
    }

    /**
     * Store a newly created article in storage.
     *
     * @param CreatearticleRequest $request
     *
     * @return Response
     */
    public function store(CreatearticleRequest $request)
    {
        $input = $request->all();

        $article = $this->articleRepository->create($input);

        Flash::success('Article saved successfully.');

        return redirect(route('articles.index'));
    }

    /**
     * Display the specified article.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $article = $this->articleRepository->findWithoutFail($id);
       //  $id_categorie=DB::table('article')->where('id',$id)->pluck('categorie_article_id');
       //  $categorie = DB::table('categorie_article')->where('id', $id_categorie)->first();

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        return view('articles.show')->with('article', $article)->with('categorie','categorie');
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $article = $this->articleRepository->findWithoutFail($id);
        $categorie=$this->articleRepository->allCategorie();

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        return view('articles.edit')->with('article', $article)->with('categorie',$categorie);
    }

    /**
     * Update the specified article in storage.
     *
     * @param  int              $id
     * @param UpdatearticleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatearticleRequest $request)
    {
        $article = $this->articleRepository->findWithoutFail($id);

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        $article = $this->articleRepository->update($request->all(), $id);

        Flash::success('Article updated successfully.');

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified article from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $article = $this->articleRepository->findWithoutFail($id);

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        $this->articleRepository->delete($id);

        Flash::success('Article deleted successfully.');

        return redirect(route('articles.index'));
    }
}
