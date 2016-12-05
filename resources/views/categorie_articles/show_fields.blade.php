<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $categorieArticle->id !!}</p>
</div>

<!-- Designation Field -->
<div class="form-group">
    {!! Form::label('designation', 'Designation:') !!}
    <p>{!! $categorieArticle->designation !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $categorieArticle->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $categorieArticle->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $categorieArticle->deleted_at !!}</p>
</div>

