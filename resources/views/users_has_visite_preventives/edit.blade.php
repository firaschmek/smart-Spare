
    <section class="content-header">
        <h1>
            Users Has Visite Preventive
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($usersHasVisitePreventive, ['route' => ['usersHasVisitePreventives.update', $usersHasVisitePreventive->id], 'method' => 'patch']) !!}

                        @include('users_has_visite_preventives.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
