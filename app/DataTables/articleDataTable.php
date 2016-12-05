<?php

namespace App\DataTables;

use App\Models\article;
use Form;
use Yajra\Datatables\Services\DataTable;

class articleDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'articles.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $articles = article::query()>select([
            'artciles.id as id',
           'artciles.designation as designation',
           'artciles.code_article as code_article',
            'categorie_article.designation as categorie_article_designation',
           
            ])
            ->leftJoin('categorie_article','artciles.categorie_id', '=', 'categorie_article.id');
        return $this->applyScopes($articles);
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
            'designation' => ['name' => 'designation', 'data' => 'designation'],
            'code_article' => ['name' => 'code_article', 'data' => 'code_article'],
            'categorie_article_id' => ['name' => 'categorie_article_id', 'data' => 'categorie_article_designation']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'articles';
    }
}
