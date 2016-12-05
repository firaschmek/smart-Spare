<?php

namespace App\Http\Controllers;

use App\DataTables\attribut_articleDataTable;
use App\Http\Requests;
use App\Http\Requests\Createattribut_articleRequest;
use App\Http\Requests\Updateattribut_articleRequest;
use App\Repositories\attribut_articleRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class attribut_articleController extends AppBaseController
{
    /** @var  attribut_articleRepository */
    private $attributArticleRepository;

    public function __construct(attribut_articleRepository $attributArticleRepo)
    {
        $this->attributArticleRepository = $attributArticleRepo;
    }

    /**
     * Display a listing of the attribut_article.
     *
     * @param attribut_articleDataTable $attributArticleDataTable
     * @return Response
     */
    public function index(attribut_articleDataTable $attributArticleDataTable)
    {
        return $attributArticleDataTable->render('attribut_articles.index');
    }

    /**
     * Show the form for creating a new attribut_article.
     *
     * @return Response
     */
    public function create()
    {
        return view('attribut_articles.create');
    }

    /**
     * Store a newly created attribut_article in storage.
     *
     * @param Createattribut_articleRequest $request
     *
     * @return Response
     */
    public function store(Createattribut_articleRequest $request)
    {
        $input = $request->all();

        $attributArticle = $this->attributArticleRepository->create($input);

        Flash::success('Attribut Article saved successfully.');

        return redirect(route('attributArticles.index'));
    }

    /**
     * Display the specified attribut_article.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $attributArticle = $this->attributArticleRepository->findWithoutFail($id);

        if (empty($attributArticle)) {
            Flash::error('Attribut Article not found');

            return redirect(route('attributArticles.index'));
        }

        return view('attribut_articles.show')->with('attributArticle', $attributArticle);
    }

    /**
     * Show the form for editing the specified attribut_article.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $attributArticle = $this->attributArticleRepository->findWithoutFail($id);

        if (empty($attributArticle)) {
            Flash::error('Attribut Article not found');

            return redirect(route('attributArticles.index'));
        }

        return view('attribut_articles.edit')->with('attributArticle', $attributArticle);
    }

    /**
     * Update the specified attribut_article in storage.
     *
     * @param  int              $id
     * @param Updateattribut_articleRequest $request
     *
     * @return Response
     */
    public function update($id, Updateattribut_articleRequest $request)
    {
        $attributArticle = $this->attributArticleRepository->findWithoutFail($id);

        if (empty($attributArticle)) {
            Flash::error('Attribut Article not found');

            return redirect(route('attributArticles.index'));
        }

        $attributArticle = $this->attributArticleRepository->update($request->all(), $id);

        Flash::success('Attribut Article updated successfully.');

        return redirect(route('attributArticles.index'));
    }

    /**
     * Remove the specified attribut_article from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $attributArticle = $this->attributArticleRepository->findWithoutFail($id);

        if (empty($attributArticle)) {
            Flash::error('Attribut Article not found');

            return redirect(route('attributArticles.index'));
        }

        $this->attributArticleRepository->delete($id);

        Flash::success('Attribut Article deleted successfully.');

        return redirect(route('attributArticles.index'));
    }
}
