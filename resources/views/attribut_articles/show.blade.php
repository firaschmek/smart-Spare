
    <section class="content-header">
        <h1>
            Attribut Article
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('attribut_articles.show_fields')
                    <a href="{!! route('attributArticles.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>

