<?php

namespace App\DataTables;

use App\Models\users_has_visite_preventive;
use Form;
use Yajra\Datatables\Services\DataTable;

class users_has_visite_preventiveDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'users_has_visite_preventives.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        //$usersHasVisitePreventives = users_has_visite_preventive::query();
        $usersHasVisitePreventives = users_has_visite_preventive::query()->select([
            'users_has_visite_preventives.id as id',
           
            'users.name as name_users',
            'visite_preventive.date_visite as visite_preventive_date'
            ])
            ->leftJoin('users','users_has_visite_preventive.users_id', '=', 'users.id')
            ->leftJoin('visite_preventive','users_has_visite_preventive.visite_preventive_id','=','visite_preventive.id');

        return $this->applyScopes($usersHasVisitePreventives);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
        
            'users' => ['name' => 'name_users', 'data' => 'name_users'],
            'visite_preventive_date' => ['name' => 'visite_preventive_date', 'data' => 'visite_preventive_date']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'usersHasVisitePreventives';
    }
}
