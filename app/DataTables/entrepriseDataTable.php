<?php

namespace App\DataTables;

use App\Models\entreprise;
use Form;
use Yajra\Datatables\Services\DataTable;

class entrepriseDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'entreprises.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $entreprises = entreprise::query();

        return $this->applyScopes($entreprises);
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
            'nom' => ['name' => 'nom', 'data' => 'nom'],
            'administrateur' => ['name' => 'administrateur', 'data' => 'administrateur'],
            'adresse' => ['name' => 'adresse', 'data' => 'adresse'],
            'ville' => ['name' => 'ville', 'data' => 'ville'],
            'code_post' => ['name' => 'code_post', 'data' => 'code_post'],
            'tel' => ['name' => 'tel', 'data' => 'tel'],
            'fax' => ['name' => 'fax', 'data' => 'fax'],
            'email' => ['name' => 'email', 'data' => 'email']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'entreprises';
    }
}
