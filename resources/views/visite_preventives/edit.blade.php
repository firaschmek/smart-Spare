
    <section class="content-header">
        <h1>
            Visite Preventive
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($visitePreventive, ['route' => ['visitePreventives.update', $visitePreventive->id], 'method' => 'patch']) !!}

                        @include('visite_preventives.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
