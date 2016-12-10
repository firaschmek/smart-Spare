<?php

namespace App\DataTables;

use App\Models\article;
use Form;
use Yajra\Datatables\Services\DataTable;
use Flash;
class ListearticleDataTable extends DataTable
{ public $id_categorie;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->aquery($this->id_categorie))
            ->addColumn('action', 'articles.datatables_actions')
            ->make(true);
    }
     /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajaxb($id)
    {
        return $this->datatables
            ->eloquent($this->aquery($id))
            //->addColumn('action', 'articles.datatables_actions')
            ->make(true);
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
        'id_article' => ['name' => 'id_article', 'data' => 'id_article'],
          'designation' => ['name' => 'designation', 'data' => 'designation'],
            'code_article' => ['name' => 'code_article', 'data' => 'code_article'],
            'categorie_article' => ['name' => 'categorie_article_designation', 'data' => 'categorie_article_designation']
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

public function query()
    { 

        $articles = article::query()->select([
            'article.id as id_article',
          'article.designation as designation',
           'article.code_article as code_article',
            'categorie_article.designation as categorie_article_designation'
           
            ])
          ->leftJoin('categorie_article','article.categorie_article_id', '=', 'categorie_article.id')
->where('categorie_article.id',$id)
          ;
          Flash::error('Categorie ');
        return $this->applyScopes($articles);
    }
    public function aquery($id)
    { 

        $articles = article::query()->select([
            'article.id as id_article',
          'article.designation as designation',
           'article.code_article as code_article',
            'categorie_article.designation as categorie_article_designation'
           
            ])
          ->leftJoin('categorie_article','article.categorie_article_id', '=', 'categorie_article.id')
->where('categorie_article.id',$id)
          ;
        
        return $this->applyScopes($articles);
    }

}
