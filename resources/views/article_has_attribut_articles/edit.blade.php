
    <section class="content-header">
        <h1>
            Article Has Attribut Article
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($articleHasAttributArticle, ['route' => ['articleHasAttributArticles.update', $articleHasAttributArticle->id], 'method' => 'patch']) !!}

                        @include('article_has_attribut_articles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
