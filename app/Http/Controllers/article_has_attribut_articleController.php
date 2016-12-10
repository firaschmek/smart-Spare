<?php

namespace App\Http\Controllers;

use App\DataTables\article_has_attribut_articleDataTable;
use App\Http\Requests;
use App\Http\Requests\Createarticle_has_attribut_articleRequest;
use App\Http\Requests\Updatearticle_has_attribut_articleRequest;
use App\Repositories\article_has_attribut_articleRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use DB;

class article_has_attribut_articleController extends AppBaseController
{
    /** @var  article_has_attribut_articleRepository */
    private $articleHasAttributArticleRepository;

    public function __construct(article_has_attribut_articleRepository $articleHasAttributArticleRepo)
    {
        $this->articleHasAttributArticleRepository = $articleHasAttributArticleRepo;
    }

    /**
     * Display a listing of the article_has_attribut_article.
     *
     * @param article_has_attribut_articleDataTable $articleHasAttributArticleDataTable
     * @return Response
     */
    public function index(article_has_attribut_articleDataTable $articleHasAttributArticleDataTable)
    {
        return $articleHasAttributArticleDataTable->render('article_has_attribut_articles.index');
    }

    /**
     * Show the form for creating a new article_has_attribut_article.
     *
     * @return Response
     */
    public function create()
    {
        return view('article_has_attribut_articles.create')->with('article',$this->articleHasAttributArticleRepository->allArticle())->with('attribut',$this->articleHasAttributArticleRepository->allAttribut());
    }

    /**
     * Store a newly created article_has_attribut_article in storage.
     *
     * @param Createarticle_has_attribut_articleRequest $request
     *
     * @return Response
     */
    public function store(Createarticle_has_attribut_articleRequest $request)
    {
        $input = $request->all();

        $articleHasAttributArticle = $this->articleHasAttributArticleRepository->create($input);

        Flash::success('Article Has Attribut Article saved successfully.');

        return redirect(route('articleHasAttributArticles.index'));
    }

    /**
     * Display the specified article_has_attribut_article.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $articleHasAttributArticle = $this->articleHasAttributArticleRepository->findWithoutFail($id);
        $article=DB::table('article')->where('id',$articleHasAttributArticle->article_id)->first();
  $attribut = DB::table('attribut_article')->where('id', $articleHasAttributArticle->attribut_article_id)->first();

        if (empty($articleHasAttributArticle)) {
            Flash::error('Article Has Attribut Article not found');

            return redirect(route('articleHasAttributArticles.index'));
        }

        return view('article_has_attribut_articles.show')->with('articleHasAttributArticle', $articleHasAttributArticle)->with('article', $article)->with('attribut', $attribut);
    }

    /**
     * Show the form for editing the specified article_has_attribut_article.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $articleHasAttributArticle = $this->articleHasAttributArticleRepository->findWithoutFail($id);

        if (empty($articleHasAttributArticle)) {
            Flash::error('Article Has Attribut Article not found');

            return redirect(route('articleHasAttributArticles.index'));
        }

        return view('article_has_attribut_articles.edit')->with('articleHasAttributArticle', $articleHasAttributArticle)->with('article',$this->articleHasAttributArticleRepository->allArticle())->with('attribut',$this->articleHasAttributArticleRepository->allAttribut());;
    }

    /**
     * Update the specified article_has_attribut_article in storage.
     *
     * @param  int              $id
     * @param Updatearticle_has_attribut_articleRequest $request
     *
     * @return Response
     */
    public function update($id, Updatearticle_has_attribut_articleRequest $request)
    {
        $articleHasAttributArticle = $this->articleHasAttributArticleRepository->findWithoutFail($id);

        if (empty($articleHasAttributArticle)) {
            Flash::error('Article Has Attribut Article not found');

            return redirect(route('articleHasAttributArticles.index'));
        }

        $articleHasAttributArticle = $this->articleHasAttributArticleRepository->update($request->all(), $id);

        Flash::success('Article Has Attribut Article updated successfully.');

        return redirect(route('articleHasAttributArticles.index'));
    }

    /**
     * Remove the specified article_has_attribut_article from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $articleHasAttributArticle = $this->articleHasAttributArticleRepository->findWithoutFail($id);

        if (empty($articleHasAttributArticle)) {
            Flash::error('Article Has Attribut Article not found');

            return redirect(route('articleHasAttributArticles.index'));
        }

        $this->articleHasAttributArticleRepository->delete($id);

        Flash::success('Article Has Attribut Article deleted successfully.');

        return redirect(route('articleHasAttributArticles.index'));
    }
}
