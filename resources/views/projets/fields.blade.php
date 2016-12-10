<!-- Designation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('designation', 'Designation:') !!}
    {!! Form::text('designation', null, array('class' => 'form-control','required'=>'required')) !!}
</div>

<!-- Client Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_id', 'Client Id:') !!}
   {!! Form::select('client_id', $client,null, array('class' => 'form-control js-example-basic-single') )     !!}
       <br>
   
</div>

<!-- Contrat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contrat', 'Contrat:') !!}
    {!! Form::text('contrat', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('projets.index') !!}" class="btn btn-default">Cancel</a>
</div>
