<?php

namespace App\Http\Controllers;

use App\DataTables\DemoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDemoRequest;
use App\Http\Requests\UpdateDemoRequest;
use App\Repositories\DemoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DemoController extends AppBaseController
{
    /** @var  DemoRepository */
    private $demoRepository;

    public function __construct(DemoRepository $demoRepo)
    {
        $this->demoRepository = $demoRepo;
    }

    /**
     * Display a listing of the Demo.
     *
     * @param DemoDataTable $demoDataTable
     * @return Response
     */
    public function index(DemoDataTable $demoDataTable)
    {
        return $demoDataTable->render('demos.index');
    }

    /**
     * Show the form for creating a new Demo.
     *
     * @return Response
     */
    public function create()
    {
        return view('demos.create');
    }

    /**
     * Store a newly created Demo in storage.
     *
     * @param CreateDemoRequest $request
     *
     * @return Response
     */
    public function store(CreateDemoRequest $request)
    {
        $input = $request->all();

        $demo = $this->demoRepository->create($input);

        Flash::success('Demo saved successfully.');

        return redirect(route('demos.index'));
    }

    /**
     * Display the specified Demo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $demo = $this->demoRepository->findWithoutFail($id);

        if (empty($demo)) {
            Flash::error('Demo not found');

            return redirect(route('demos.index'));
        }

        return view('demos.show')->with('demo', $demo);
    }

    /**
     * Show the form for editing the specified Demo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $demo = $this->demoRepository->findWithoutFail($id);

        if (empty($demo)) {
            Flash::error('Demo not found');

            return redirect(route('demos.index'));
        }

        return view('demos.edit')->with('demo', $demo);
    }

    /**
     * Update the specified Demo in storage.
     *
     * @param  int              $id
     * @param UpdateDemoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDemoRequest $request)
    {
        $demo = $this->demoRepository->findWithoutFail($id);

        if (empty($demo)) {
            Flash::error('Demo not found');

            return redirect(route('demos.index'));
        }

        $demo = $this->demoRepository->update($request->all(), $id);

        Flash::success('Demo updated successfully.');

        return redirect(route('demos.index'));
    }

    /**
     * Remove the specified Demo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $demo = $this->demoRepository->findWithoutFail($id);

        if (empty($demo)) {
            Flash::error('Demo not found');

            return redirect(route('demos.index'));
        }

        $this->demoRepository->delete($id);

        Flash::success('Demo deleted successfully.');

        return redirect(route('demos.index'));
    }
}
