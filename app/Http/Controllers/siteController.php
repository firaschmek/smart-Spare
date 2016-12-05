<?php

namespace App\Http\Controllers;

use App\DataTables\siteDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatesiteRequest;
use App\Http\Requests\UpdatesiteRequest;
use App\Repositories\siteRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class siteController extends AppBaseController
{
    /** @var  siteRepository */
    private $siteRepository;

    public function __construct(siteRepository $siteRepo)
    {
        $this->siteRepository = $siteRepo;
    }

    /**
     * Display a listing of the site.
     *
     * @param siteDataTable $siteDataTable
     * @return Response
     */
    public function index(siteDataTable $siteDataTable)
    {
        return $siteDataTable->render('sites.index');
    }

    /**
     * Show the form for creating a new site.
     *
     * @return Response
     */
    public function create()
    {
        return view('sites.create');
    }

    /**
     * Store a newly created site in storage.
     *
     * @param CreatesiteRequest $request
     *
     * @return Response
     */
    public function store(CreatesiteRequest $request)
    {
        $input = $request->all();

        $site = $this->siteRepository->create($input);

        Flash::success('Site saved successfully.');

        return redirect(route('sites.index'));
    }

    /**
     * Display the specified site.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $site = $this->siteRepository->findWithoutFail($id);

        if (empty($site)) {
            Flash::error('Site not found');

            return redirect(route('sites.index'));
        }

        return view('sites.show')->with('site', $site);
    }

    /**
     * Show the form for editing the specified site.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $site = $this->siteRepository->findWithoutFail($id);

        if (empty($site)) {
            Flash::error('Site not found');

            return redirect(route('sites.index'));
        }

        return view('sites.edit')->with('site', $site);
    }

    /**
     * Update the specified site in storage.
     *
     * @param  int              $id
     * @param UpdatesiteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesiteRequest $request)
    {
        $site = $this->siteRepository->findWithoutFail($id);

        if (empty($site)) {
            Flash::error('Site not found');

            return redirect(route('sites.index'));
        }

        $site = $this->siteRepository->update($request->all(), $id);

        Flash::success('Site updated successfully.');

        return redirect(route('sites.index'));
    }

    /**
     * Remove the specified site from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $site = $this->siteRepository->findWithoutFail($id);

        if (empty($site)) {
            Flash::error('Site not found');

            return redirect(route('sites.index'));
        }

        $this->siteRepository->delete($id);

        Flash::success('Site deleted successfully.');

        return redirect(route('sites.index'));
    }
}
