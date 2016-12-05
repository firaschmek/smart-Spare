<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Administrateur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('administrateur', 'Administrateur:') !!}
    {!! Form::text('administrateur', null, ['class' => 'form-control']) !!}
</div>

<!-- Adresse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adresse', 'Adresse:') !!}
    {!! Form::text('adresse', null, ['class' => 'form-control']) !!}
</div>

<!-- Ville Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ville', 'Ville:') !!}
    {!! Form::text('ville', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Post Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_post', 'Code Post:') !!}
    {!! Form::text('code_post', null, ['class' => 'form-control']) !!}
</div>

<!-- Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tel', 'Tel:') !!}
    {!! Form::text('tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('entreprises.index') !!}" class="btn btn-default">Cancel</a>
</div>
