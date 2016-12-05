<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $client->id !!}</p>
</div>

<!-- Designation Field -->
<div class="form-group">
    {!! Form::label('designation', 'Designation:') !!}
    <p>{!! $client->designation !!}</p>
</div>

<!-- Code Client Field -->
<div class="form-group">
    {!! Form::label('code_client', 'Code Client:') !!}
    <p>{!! $client->code_client !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $client->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $client->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $client->deleted_at !!}</p>
</div>

