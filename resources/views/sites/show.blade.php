
    <section class="content-header">
        <h1>
            Site
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('sites.show_fields')
                    <a href="{!! route('sites.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
