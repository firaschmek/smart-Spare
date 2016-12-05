
    <section class="content-header">
        <h1>
            Entreprise
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('entreprises.show_fields')
                    <a href="{!! route('entreprises.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>

