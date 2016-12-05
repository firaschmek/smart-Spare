<?php

namespace App\Http\Controllers;

use App\DataTables\entropotDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateentropotRequest;
use App\Http\Requests\UpdateentropotRequest;
use App\Repositories\entropotRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class entropotController extends AppBaseController
{
    /** @var  entropotRepository */
    private $entropotRepository;

    public function __construct(entropotRepository $entropotRepo)
    {
        $this->entropotRepository = $entropotRepo;
    }

    /**
     * Display a listing of the entropot.
     *
     * @param entropotDataTable $entropotDataTable
     * @return Response
     */
    public function index(entropotDataTable $entropotDataTable)
    {
        return $entropotDataTable->render('entropots.index');
    }

    /**
     * Show the form for creating a new entropot.
     *
     * @return Response
     */
    public function create()
    {
        return view('entropots.create');
    }

    /**
     * Store a newly created entropot in storage.
     *
     * @param CreateentropotRequest $request
     *
     * @return Response
     */
    public function store(CreateentropotRequest $request)
    {
        $input = $request->all();

        $entropot = $this->entropotRepository->create($input);

        Flash::success('Entropot saved successfully.');

        return redirect(route('entropots.index'));
    }

    /**
     * Display the specified entropot.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $entropot = $this->entropotRepository->findWithoutFail($id);

        if (empty($entropot)) {
            Flash::error('Entropot not found');

            return redirect(route('entropots.index'));
        }

        return view('entropots.show')->with('entropot', $entropot);
    }

    /**
     * Show the form for editing the specified entropot.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $entropot = $this->entropotRepository->findWithoutFail($id);

        if (empty($entropot)) {
            Flash::error('Entropot not found');

            return redirect(route('entropots.index'));
        }

        return view('entropots.edit')->with('entropot', $entropot);
    }

    /**
     * Update the specified entropot in storage.
     *
     * @param  int              $id
     * @param UpdateentropotRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateentropotRequest $request)
    {
        $entropot = $this->entropotRepository->findWithoutFail($id);

        if (empty($entropot)) {
            Flash::error('Entropot not found');

            return redirect(route('entropots.index'));
        }

        $entropot = $this->entropotRepository->update($request->all(), $id);

        Flash::success('Entropot updated successfully.');

        return redirect(route('entropots.index'));
    }

    /**
     * Remove the specified entropot from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $entropot = $this->entropotRepository->findWithoutFail($id);

        if (empty($entropot)) {
            Flash::error('Entropot not found');

            return redirect(route('entropots.index'));
        }

        $this->entropotRepository->delete($id);

        Flash::success('Entropot deleted successfully.');

        return redirect(route('entropots.index'));
    }
}
