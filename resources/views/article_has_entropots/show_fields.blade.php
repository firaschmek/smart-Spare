<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $articleHasEntropot->id !!}</p>
</div>

<!-- Article Id Field -->
<div class="form-group">
    {!! Form::label('article_id', 'Article :') !!}
    <p>{!! $article->designation !!}</p>
</div>

<!-- Entropot Id Field -->
<div class="form-group">
    {!! Form::label('entropot_id', 'Entropot :') !!}
    <p>{!! $entropot->adresse !!}</p>
</div>

<!-- Quantite Field -->
<div class="form-group">
    {!! Form::label('quantite', 'Quantite:') !!}
    <p>{!! $articleHasEntropot->quantite !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $articleHasEntropot->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $articleHasEntropot->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $articleHasEntropot->deleted_at !!}</p>
</div>

