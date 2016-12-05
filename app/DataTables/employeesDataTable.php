<?php

namespace App\DataTables;

use App\Models\employees;
use Form;
use Yajra\Datatables\Services\DataTable;

class employeesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'employees.datatables_actions')
            ->make(false);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $employees = employees::query();

        return $this->applyScopes($employees);
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
            'birth_date' => ['name' => 'birth_date', 'data' => 'birth_date'],
            'first_name' => ['name' => 'first_name', 'data' => 'first_name'],
            'last_name' => ['name' => 'last_name', 'data' => 'last_name'],
            'gender' => ['name' => 'gender', 'data' => 'gender'],
            'hire_date' => ['name' => 'hire_date', 'data' => 'hire_date'],
            'deleted_at' => ['name' => 'deleted_at', 'data' => 'deleted_at']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'employees';
    }
}
