
    <section class="content-header">
        <h1>
            Entropot
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('entropots.show_fields')
                    <a href="{!! route('entropots.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
