
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
                    {!! Form::open(['route' => 'entropots.store']) !!}

                        @include('entropots.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

