
    <section class="content-header">
        <h1>
            Users Has Visite Preventive
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('users_has_visite_preventives.show_fields')
                    <a href="{!! route('usersHasVisitePreventives.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
