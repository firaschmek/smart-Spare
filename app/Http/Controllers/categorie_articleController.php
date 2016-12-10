<?php

namespace App\Http\Controllers;

use App\DataTables\categorie_articleDataTable;
use App\DataTables\articleDataTable;
use App\DataTables\ListearticleDataTable;
use App\Http\Requests;
use App\Http\Requests\Createcategorie_articleRequest;
use App\Http\Requests\Updatecategorie_articleRequest;
use App\Repositories\categorie_articleRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use DB;
class categorie_articleController extends AppBaseController
{
    /** @var  categorie_articleRepository */
    private $categorieArticleRepository;

    public function __construct(categorie_articleRepository $categorieArticleRepo)
    {
        $this->categorieArticleRepository = $categorieArticleRepo;
    }

    /**
     * Display a listing of the categorie_article.
     *
     * @param categorie_articleDataTable $categorieArticleDataTable
     * @return Response
     */
    public function index(categorie_articleDataTable $categorieArticleDataTable)
    {
        return $categorieArticleDataTable->render('categorie_articles.index');
    }

    /**
     * Show the form for creating a new categorie_article.
     *
     * @return Response
     */
    public function create()
    {
        return view('categorie_articles.create');
    }

    /**
     * Store a newly created categorie_article in storage.
     *
     * @param Createcategorie_articleRequest $request
     *
     * @return Response
     */
    public function store(Createcategorie_articleRequest $request)
    {
        $input = $request->all();

        $categorieArticle = $this->categorieArticleRepository->create($input);

        Flash::success('Categorie Article saved successfully.');

        return redirect(route('categorieArticles.index'));
    }

    /**
     * Display the specified categorie_article.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categorieArticle = $this->categorieArticleRepository->findWithoutFail($id);

        if (empty($categorieArticle)) {
            Flash::error('Categorie Article not found');

            return redirect(route('categorieArticles.index'));
        }

        return view('categorie_articles.show')->with('categorieArticle', $categorieArticle);
    }

    /**
     * Show the form for editing the specified categorie_article.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categorieArticle = $this->categorieArticleRepository->findWithoutFail($id);

        if (empty($categorieArticle)) {
            Flash::error('Categorie Article not found');

            return redirect(route('categorieArticles.index'));
        }

        return view('categorie_articles.edit')->with('categorieArticle', $categorieArticle);
    }

    /**
     * Update the specified categorie_article in storage.
     *
     * @param  int              $id
     * @param Updatecategorie_articleRequest $request
     *
     * @return Response
     */
    public function update($id, Updatecategorie_articleRequest $request)
    {
        $categorieArticle = $this->categorieArticleRepository->findWithoutFail($id);

        if (empty($categorieArticle)) {
            Flash::error('Categorie Article not found');

            return redirect(route('categorieArticles.index'));
        }

        $categorieArticle = $this->categorieArticleRepository->update($request->all(), $id);

        Flash::success('Categorie Article updated successfully.');

        return redirect(route('categorieArticles.index'));
    }

    /**
     * Remove the specified categorie_article from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categorieArticle = $this->categorieArticleRepository->findWithoutFail($id);

        if (empty($categorieArticle)) {
            Flash::error('Categorie Article not found');

            return redirect(route('categorieArticles.index'));
        }

        $this->categorieArticleRepository->delete($id);

        Flash::success('Categorie Article deleted successfully.');

        return redirect(route('categorieArticles.index'));
    }
    /**
     * Display a listing of the categorie_article.
     *
     * @param categorie_articleDataTable $categorieArticleDataTable
     * @return Response
     */
    public function allarticle($id,ListearticleDataTable $articleDataTable)
    {

  //$article=DB::table('article')->where('categorie_article_id',$id)->pluck('designation');
        //return view('categorie_articles.untitled')->with('article',$article);

  $articleDataTable->id_categorie=$id;
$articleDataTable->ajax();

  return $articleDataTable->render('articles.index');
    }
}
