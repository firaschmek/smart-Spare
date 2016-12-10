<?php

namespace App\Http\Controllers;

use App\DataTables\visite_preventiveDataTable;
use App\Http\Requests;
use App\Http\Requests\Createvisite_preventiveRequest;
use App\Http\Requests\Updatevisite_preventiveRequest;
use App\Repositories\visite_preventiveRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use DB;

class visite_preventiveController extends AppBaseController
{
    /** @var  visite_preventiveRepository */
    private $visitePreventiveRepository;

    public function __construct(visite_preventiveRepository $visitePreventiveRepo)
    {
        $this->visitePreventiveRepository = $visitePreventiveRepo;
    }

    /**
     * Display a listing of the visite_preventive.
     *
     * @param visite_preventiveDataTable $visitePreventiveDataTable
     * @return Response
     */
    public function index(visite_preventiveDataTable $visitePreventiveDataTable)
    {
        return $visitePreventiveDataTable->render('visite_preventives.index');
    }

    /**
     * Show the form for creating a new visite_preventive.
     *
     * @return Response
     */
    public function create()
    {   $site=$this->visitePreventiveRepository->Allsite();
        return view('visite_preventives.create')->with('site',$site);
    }

    /**
     * Store a newly created visite_preventive in storage.
     *
     * @param Createvisite_preventiveRequest $request
     *
     * @return Response
     */
    public function store(Createvisite_preventiveRequest $request)
    {
        $input = $request->all();

        $visitePreventive = $this->visitePreventiveRepository->create($input);

        Flash::success('Visite Preventive saved successfully.');

        return redirect(route('visitePreventives.index'));
    }

    /**
     * Display the specified visite_preventive.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $visitePreventive = $this->visitePreventiveRepository->findWithoutFail($id);

        if (empty($visitePreventive)) {
            Flash::error('Visite Preventive not found');

            return redirect(route('visitePreventives.index'));
        }

        return view('visite_preventives.show')->with('visitePreventive', $visitePreventive);
    }

    /**
     * Show the form for editing the specified visite_preventive.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $visitePreventive = $this->visitePreventiveRepository->findWithoutFail($id);
$site=$this->visitePreventiveRepository->Allsite();
        if (empty($visitePreventive)) {
            Flash::error('Visite Preventive not found');

            return redirect(route('visitePreventives.index'));
        }

        return view('visite_preventives.edit')->with('visitePreventive', $visitePreventive)->with('site',$site);
    }

    /**
     * Update the specified visite_preventive in storage.
     *
     * @param  int              $id
     * @param Updatevisite_preventiveRequest $request
     *
     * @return Response
     */
    public function update($id, Updatevisite_preventiveRequest $request)
    {
        $visitePreventive = $this->visitePreventiveRepository->findWithoutFail($id);

        if (empty($visitePreventive)) {
            Flash::error('Visite Preventive not found');

            return redirect(route('visitePreventives.index'));
        }

        $visitePreventive = $this->visitePreventiveRepository->update($request->all(), $id);

        Flash::success('Visite Preventive updated successfully.');

        return redirect(route('visitePreventives.index'));
    }

    /**
     * Remove the specified visite_preventive from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $visitePreventive = $this->visitePreventiveRepository->findWithoutFail($id);

        if (empty($visitePreventive)) {
            Flash::error('Visite Preventive not found');

            return redirect(route('visitePreventives.index'));
        }

        $this->visitePreventiveRepository->delete($id);

        Flash::success('Visite Preventive deleted successfully.');

        return redirect(route('visitePreventives.index'));
    }
}
