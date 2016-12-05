<?php

namespace App\DataTables;

use App\Models\article_has_entropot;
use Form;
use Yajra\Datatables\Services\DataTable;

class article_has_entropotDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'article_has_entropots.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $articleHasEntropots = article_has_entropot::query();
        $article_has_entropot = article_has_entropot::query()->select([
            'article_has_entropot.id',
            'article_has_entropot.quantite as quantite',
            'article_has_entropot.article_id as article_ide',
            'article_has_entropot.entropot_id as entropot_ide',
            'article.designation as article_des',
            'entropot.adresse as entrop_adress'
            ])
            ->leftJoin('article','article_has_entropot.article_id', '=', 'article.id')
            ->leftJoin('entropot','article_has_entropot.entropot_id', '=', 'entropot.id');

        return $this->applyScopes($article_has_entropot);
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
            
            'designation_de_l\' article' => ['name' => 'article_des', 'data' => 'article_des'],
            'entropot_adresse' => ['name' => 'entrop_adress', 'data' => 'entrop_adress'],
            'quantite' => ['name' => 'quantite', 'data' => 'quantite']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'articleHasEntropots';
    }
}
