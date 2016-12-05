
    <section class="content-header">
        <h1>
            Entropot
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($entropot, ['route' => ['entropots.update', $entropot->id], 'method' => 'patch']) !!}

                        @include('entropots.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
