
    <section class="content-header">
        <h1>
            Article Has Entropot
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($articleHasEntropot, ['route' => ['articleHasEntropots.update', $articleHasEntropot->id], 'method' => 'patch']) !!}

                        @include('article_has_entropots.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
