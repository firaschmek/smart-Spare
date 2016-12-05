<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $site->id !!}</p>
</div>

<!-- Designation Field -->
<div class="form-group">
    {!! Form::label('designation', 'Designation:') !!}
    <p>{!! $site->designation !!}</p>
</div>

<!-- Adresse Field -->
<div class="form-group">
    {!! Form::label('adresse', 'Adresse:') !!}
    <p>{!! $site->adresse !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $site->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $site->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $site->deleted_at !!}</p>
</div>

