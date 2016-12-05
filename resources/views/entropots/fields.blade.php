<!-- Adresse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adresse', 'Adresse:') !!}
    {!! Form::text('adresse', null, ['class' => 'form-control']) !!}
</div>

<!-- Emplacement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emplacement', 'Emplacement:') !!}
    {!! Form::text('emplacement', null, ['class' => 'form-control']) !!}
</div>

<!-- Capacite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacite', 'Capacite:') !!}
    {!! Form::text('capacite', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('entropots.index') !!}" class="btn btn-default">Cancel</a>
</div>
