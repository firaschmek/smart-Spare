
    <section class="content-header">
        <h1>
            Entreprise
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($entreprise, ['route' => ['entreprises.update', $entreprise->id], 'method' => 'patch']) !!}

                        @include('entreprises.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
