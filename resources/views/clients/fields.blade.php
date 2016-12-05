<!-- Designation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('designation', 'Designation:') !!}
    {!! Form::text('designation', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Client Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_client', 'Code Client:') !!}
    {!! Form::text('code_client', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clients.index') !!}" class="btn btn-default">Cancel</a>
</div>
