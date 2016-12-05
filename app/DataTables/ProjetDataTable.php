<?php

namespace App\DataTables;

use App\Models\Projet;
use App\Models\Client;
use Form;
use Yajra\Datatables\Services\DataTable;
use Illuminate\Support\Facades\DB;

class ProjetDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        //$projet = Post::with('client')->select('projet.*');
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'projets.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $projets = Projet::query()->select([
            'projet.id',
            'projet.designation as des_projet',
            'projet.contrat',
            'client.designation as client_i'
            ])
            ->leftJoin('client','projet.client_id', '=', 'client.id');
        
        /*
         * $query = Post::with('user')->select('posts.*');

            return $this->dataTable->eloquent($query)->make(true);
         * */
         
       // $projets = Projet::with(Client)->select('projet.*');
//$projets = DB::select('SELECT projet.id as id, projet.designation as designation, projet.contrat, client.designation as client_id FROM projet,client where projet.client_id=client.id ');
//$projets= collect($projets);        
return $this->applyScopes($projets);
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
            'projet.designation' => ['name' => 'projet.designation', 'data' => 'des_projet'],
            'contrat' => ['name' => 'contrat', 'data' => 'contrat'],
            'client_id' => ['name' => 'client.designation', 'data' => 'client_i']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'projets';
    }
}
