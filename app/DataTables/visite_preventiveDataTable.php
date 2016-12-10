<?php

namespace App\DataTables;

use App\Models\visite_preventive;
use Form;
use Yajra\Datatables\Services\DataTable;

class visite_preventiveDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'visite_preventives.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $visitePreventives = visite_preventive::query()->select([
            'visite_preventive.id as id',
           'site.designation as designation_site',
          'visite_preventive.date_visite as dat_vis_prev'
            ]

            )
        ->leftJoin('site','visite_preventive.site_id','=','site.id');

        return $this->applyScopes($visitePreventives);
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

       'visite_preventive_id' => ['name' => 'visite_preventive.id', 'data' => 'id'],
           'site' => ['name' => 'site_id', 'data' => 'designation_site'],
           'date_visite' => ['name' => 'date_visite', 'data' => 'dat_vis_prev']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'visitePreventives';
    }
}
