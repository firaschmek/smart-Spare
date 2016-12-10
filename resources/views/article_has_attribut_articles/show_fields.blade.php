<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $articleHasAttributArticle->id !!}</p>
</div>

<!-- Article Id Field -->
<div class="form-group">
    {!! Form::label('article_id', 'Article Id:') !!}
    <p>{!! $article->designation !!}</p>
</div>

<!-- Attribut Article Id Field -->
<div class="form-group">
    {!! Form::label('attribut_article_id', 'Attribut Article Id:') !!}
    <p>{!! $attribut->designation !!}</p>
</div>

<!-- Valeur Field -->
<div class="form-group">
    {!! Form::label('valeur', 'Valeur:') !!}
    <p>{!! $articleHasAttributArticle->valeur !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $articleHasAttributArticle->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $articleHasAttributArticle->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $articleHasAttributArticle->deleted_at !!}</p>
</div>

