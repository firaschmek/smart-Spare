
    <section class="content-header">
        <h1>
            Categorie Article
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($categorieArticle, ['route' => ['categorieArticles.update', $categorieArticle->id], 'method' => 'patch']) !!}

                        @include('categorie_articles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
