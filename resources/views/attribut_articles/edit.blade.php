
    <section class="content-header">
        <h1>
            Attribut Article
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($attributArticle, ['route' => ['attributArticles.update', $attributArticle->id], 'method' => 'patch']) !!}

                        @include('attribut_articles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
