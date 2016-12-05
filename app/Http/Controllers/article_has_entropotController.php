<?php

namespace App\Http\Controllers;

use App\DataTables\article_has_entropotDataTable;
use App\Http\Requests;
use App\Http\Requests\Createarticle_has_entropotRequest;
use App\Http\Requests\Updatearticle_has_entropotRequest;
use App\Repositories\article_has_entropotRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class article_has_entropotController extends AppBaseController
{
    /** @var  article_has_entropotRepository */
    private $articleHasEntropotRepository;

    public function __construct(article_has_entropotRepository $articleHasEntropotRepo)
    {
        $this->articleHasEntropotRepository = $articleHasEntropotRepo;
    }

    /**
     * Display a listing of the article_has_entropot.
     *
     * @param article_has_entropotDataTable $articleHasEntropotDataTable
     * @return Response
     */
    public function index(article_has_entropotDataTable $articleHasEntropotDataTable)
    {
        return $articleHasEntropotDataTable->render('article_has_entropots.index');
    }

    /**
     * Show the form for creating a new article_has_entropot.
     *
     * @return Response
     */
    public function create()
    {
        return view('article_has_entropots.create')->with('article',$this->articleHasEntropotRepository->allArticle())->with('entropot',$this->articleHasEntropotRepository->allentropot());
    }

    /**
     * Store a newly created article_has_entropot in storage.
     *
     * @param Createarticle_has_entropotRequest $request
     *
     * @return Response
     */
    public function store(Createarticle_has_entropotRequest $request)
    {
        $input = $request->all();

        $articleHasEntropot = $this->articleHasEntropotRepository->create($input);

        Flash::success('Article Has Entropot saved successfully.');

        return redirect(route('articleHasEntropots.index'));
    }

    /**
     * Display the specified article_has_entropot.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $articleHasEntropot = $this->articleHasEntropotRepository->findWithoutFail($id);

        if (empty($articleHasEntropot)) {
            Flash::error('Article Has Entropot not found');

            return redirect(route('articleHasEntropots.index'));
        }

        return view('article_has_entropots.show')->with('articleHasEntropot', $articleHasEntropot)->with('article',$this->articleHasEntropotRepository->allArticle())->with('entropot',$this->articleHasEntropotRepository->allentropot());
    }

    /**
     * Show the form for editing the specified article_has_entropot.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $articleHasEntropot = $this->articleHasEntropotRepository->findWithoutFail($id);

        if (empty($articleHasEntropot)) {
            Flash::error('Article Has Entropot not found');

            return redirect(route('articleHasEntropots.index'));
        }

        return view('article_has_entropots.edit')->with('articleHasEntropot', $articleHasEntropot)->with('article',$this->articleHasEntropotRepository->allArticle())->with('entropot',$this->articleHasEntropotRepository->allentropot());
    }

    /**
     * Update the specified article_has_entropot in storage.
     *
     * @param  int              $id
     * @param Updatearticle_has_entropotRequest $request
     *
     * @return Response
     */
    public function update($id, Updatearticle_has_entropotRequest $request)
    {
        $articleHasEntropot = $this->articleHasEntropotRepository->findWithoutFail($id);

        if (empty($articleHasEntropot)) {
            Flash::error('Article Has Entropot not found');

            return redirect(route('articleHasEntropots.index'));
        }

        $articleHasEntropot = $this->articleHasEntropotRepository->update($request->all(), $id);

        Flash::success('Article Has Entropot updated successfully.');

        return redirect(route('articleHasEntropots.index'));
    }

    /**
     * Remove the specified article_has_entropot from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $articleHasEntropot = $this->articleHasEntropotRepository->findWithoutFail($id);

        if (empty($articleHasEntropot)) {
            Flash::error('Article Has Entropot not found');

            return redirect(route('articleHasEntropots.index'));
        }

        $this->articleHasEntropotRepository->delete($id);

        Flash::success('Article Has Entropot deleted successfully.');

        return redirect(route('articleHasEntropots.index'));
    }
}
