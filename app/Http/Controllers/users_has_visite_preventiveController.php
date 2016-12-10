<?php

namespace App\Http\Controllers;

use App\DataTables\users_has_visite_preventiveDataTable;
use App\Http\Requests;
use App\Models\users_has_visite_preventive;
use App\Http\Requests\Createusers_has_visite_preventiveRequest;
use App\Http\Requests\Updateusers_has_visite_preventiveRequest;
use App\Repositories\users_has_visite_preventiveRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use DB;
class users_has_visite_preventiveController extends AppBaseController
{
    /** @var  users_has_visite_preventiveRepository */
    private $usersHasVisitePreventiveRepository;

    public function __construct(users_has_visite_preventiveRepository $usersHasVisitePreventiveRepo)
    {
        $this->usersHasVisitePreventiveRepository = $usersHasVisitePreventiveRepo;
    }

    /**
     * Display a listing of the users_has_visite_preventive.
     *
     * @param users_has_visite_preventiveDataTable $usersHasVisitePreventiveDataTable
     * @return Response
     */
    public function index(users_has_visite_preventiveDataTable $usersHasVisitePreventiveDataTable)
    {
        return $usersHasVisitePreventiveDataTable->render('users_has_visite_preventives.index');
    }

    /**
     * Show the form for creating a new users_has_visite_preventive.
     *
     * @return Response
     */
    public function create()

    {
$users=$this->usersHasVisitePreventiveRepository->Allusers();
        $visite_preventive=$this->usersHasVisitePreventiveRepository->Allvisite_preventive();

        return view('users_has_visite_preventives.create')->with('users',$users)->with('visite_preventive', $visite_preventive);
    }

    /**
     * Store a newly created users_has_visite_preventive in storage.
     *
     * @param Createusers_has_visite_preventiveRequest $request
     *
     * @return Response
     */
    public function store(Createusers_has_visite_preventiveRequest $request)
    {
        $input = $request->all();

        $usersHasVisitePreventive = $this->usersHasVisitePreventiveRepository->create($input);

        Flash::success('Users Has Visite Preventive saved successfully.');

        return redirect(route('usersHasVisitePreventives.index'));
    }

    /**
     * Display the specified users_has_visite_preventive.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
      $usersHasVisitePreventive = $this->usersHasVisitePreventiveRepository->findWithoutFail($id);
        $users=DB::table('users')->where('id', $usersHasVisitePreventive->users_id)->pluck('name')->first();;
         $visite_preventive=DB::table('visite_preventive')->where('id', $usersHasVisitePreventive->visite_preventive_id)->pluck('date_visite')->first();;
  //$categories = DB::table('categorie_article')->where('id', $id_categorie)->first();

        if (empty($usersHasVisitePreventive)) {
            Flash::error('Users Has Visite Preventive not found');

            return redirect(route('usersHasVisitePreventives.index'));
        }

        return view('users_has_visite_preventives.show')->with('usersHasVisitePreventive', $usersHasVisitePreventive)->with('username',$users)->with('visite_preventive', $visite_preventive)
        ;
    }

    /**
     * Show the form for editing the specified users_has_visite_preventive.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usersHasVisitePreventive = $this->usersHasVisitePreventiveRepository->findWithoutFail($id);
$users=$this->usersHasVisitePreventiveRepository->Allusers();
        $visite_preventive=$this->usersHasVisitePreventiveRepository->Allvisite_preventive();
        if (empty($usersHasVisitePreventive)) {
            Flash::error('Users Has Visite Preventive not found');

            return redirect(route('usersHasVisitePreventives.index'));
        }

        return view('users_has_visite_preventives.edit')->with('usersHasVisitePreventive', $usersHasVisitePreventive)->with('users',$users)->with('visite_preventive',$visite_preventive);
    }

    /**
     * Update the specified users_has_visite_preventive in storage.
     *
     * @param  int              $id
     * @param Updateusers_has_visite_preventiveRequest $request
     *
     * @return Response
     */
    public function update($id, Updateusers_has_visite_preventiveRequest $request)
    {
        $usersHasVisitePreventive = $this->usersHasVisitePreventiveRepository->findWithoutFail($id);
       

        if (empty($usersHasVisitePreventive)) {
            Flash::error('Users Has Visite Preventive not found');

            return redirect(route('usersHasVisitePreventives.index'));
        }

        $usersHasVisitePreventive = $this->usersHasVisitePreventiveRepository->update($request->all(), $id);

        Flash::success('Users Has Visite Preventive updated successfully.');

        return redirect(route('usersHasVisitePreventives.index'));
    }

    /**
     * Remove the specified users_has_visite_preventive from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usersHasVisitePreventive = $this->usersHasVisitePreventiveRepository->findWithoutFail($id);

        if (empty($usersHasVisitePreventive)) {
            Flash::error('Users Has Visite Preventive not found');

            return redirect(route('usersHasVisitePreventives.index'));
        }

        $this->usersHasVisitePreventiveRepository->delete($id);

        Flash::success('Users Has Visite Preventive deleted successfully.');

        return redirect(route('usersHasVisitePreventives.index'));
    }
}
