<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $article->id !!}</p>
</div>

<!-- Designation Field -->
<div class="form-group">
    {!! Form::label('designation', 'Designation:') !!}
    <p>{!! $article->designation !!}</p>
</div>

<!-- Code Article Field -->
<div class="form-group">
    {!! Form::label('code_article', 'Code Article:') !!}
    <p>{!! $article->code_article !!}</p>
</div>

<!-- Categorie Article Id Field -->
<div class="form-group">
    {!! Form::label('categorie_article_id', 'Categorie Article Id:') !!}
    <p>{!! $article->categorie_article_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $article->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $article->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $article->deleted_at !!}</p>
</div>

