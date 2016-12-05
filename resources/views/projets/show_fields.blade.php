<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $projet->id !!}</p>
</div>

<!-- Designation Field -->
<div class="form-group">
    {!! Form::label('designation', 'Designation:') !!}
    <p>{!! $projet->designation !!}</p>
</div>

<!-- Client Id Field -->
<div class="form-group">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{!! $projet->client_id !!}</p>
</div>

<!-- Contrat Field -->
<div class="form-group">
    {!! Form::label('contrat', 'Contrat:') !!}
    <p>{!! $projet->contrat !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $projet->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $projet->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $projet->deleted_at !!}</p>
</div>

