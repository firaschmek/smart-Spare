<?php

namespace App\DataTables;

use App\Models\article_has_attribut_article;
use Form;
use Yajra\Datatables\Services\DataTable;

class article_has_attribut_articleDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'article_has_attribut_articles.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $articleHasAttributArticles = article_has_attribut_article::query()->select([
            'article_has_attribut_article.id','article_has_attribut_article.valeur as valeur' ,'article.designation as designarticle','attribut_article.designation as designattribut'

         //  'users_has_visite_preventive.id as vis' 
          //  'users.id as name_i'
           
            ])
            ->leftJoin('article','article_has_attribut_article.article_id', '=', 'article.id')
            ->leftJoin('attribut_article','article_has_attribut_article.attribut_article_id', '=', 'attribut_article.id');;

        return $this->applyScopes($articleHasAttributArticles);
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
            'article_id' => ['name' => 'article_id', 'data' => 'designarticle'],
            'attribut_article_id' => ['name' => 'attribut_article_id', 'data' => 'designattribut'],
            'valeur' => ['name' => 'valeur', 'data' => 'valeur']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'articleHasAttributArticles';
    }
}
