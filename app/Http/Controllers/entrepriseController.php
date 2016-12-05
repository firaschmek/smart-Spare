<?php

namespace App\Http\Controllers;

use App\DataTables\entrepriseDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateentrepriseRequest;
use App\Http\Requests\UpdateentrepriseRequest;
use App\Repositories\entrepriseRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class entrepriseController extends AppBaseController
{
    /** @var  entrepriseRepository */
    private $entrepriseRepository;

    public function __construct(entrepriseRepository $entrepriseRepo)
    {
        $this->entrepriseRepository = $entrepriseRepo;
    }

    /**
     * Display a listing of the entreprise.
     *
     * @param entrepriseDataTable $entrepriseDataTable
     * @return Response
     */
    public function index(entrepriseDataTable $entrepriseDataTable)
    {
        return $entrepriseDataTable->render('entreprises.index');
    }

    /**
     * Show the form for creating a new entreprise.
     *
     * @return Response
     */
    public function create()
    {
        return view('entreprises.create');
    }

    /**
     * Store a newly created entreprise in storage.
     *
     * @param CreateentrepriseRequest $request
     *
     * @return Response
     */
    public function store(CreateentrepriseRequest $request)
    {
        $input = $request->all();

        $entreprise = $this->entrepriseRepository->create($input);

        Flash::success('Entreprise saved successfully.');

        return redirect(route('entreprises.index'));
    }

    /**
     * Display the specified entreprise.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $entreprise = $this->entrepriseRepository->findWithoutFail($id);

        if (empty($entreprise)) {
            Flash::error('Entreprise not found');

            return redirect(route('entreprises.index'));
        }

        return view('entreprises.show')->with('entreprise', $entreprise);
    }

    /**
     * Show the form for editing the specified entreprise.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $entreprise = $this->entrepriseRepository->findWithoutFail($id);

        if (empty($entreprise)) {
            Flash::error('Entreprise not found');

            return redirect(route('entreprises.index'));
        }

        return view('entreprises.edit')->with('entreprise', $entreprise);
    }

    /**
     * Update the specified entreprise in storage.
     *
     * @param  int              $id
     * @param UpdateentrepriseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateentrepriseRequest $request)
    {
        $entreprise = $this->entrepriseRepository->findWithoutFail($id);

        if (empty($entreprise)) {
            Flash::error('Entreprise not found');

            return redirect(route('entreprises.index'));
        }

        $entreprise = $this->entrepriseRepository->update($request->all(), $id);

        Flash::success('Entreprise updated successfully.');

        return redirect(route('entreprises.index'));
    }

    /**
     * Remove the specified entreprise from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $entreprise = $this->entrepriseRepository->findWithoutFail($id);

        if (empty($entreprise)) {
            Flash::error('Entreprise not found');

            return redirect(route('entreprises.index'));
        }

        $this->entrepriseRepository->delete($id);

        Flash::success('Entreprise deleted successfully.');

        return redirect(route('entreprises.index'));
    }
}
