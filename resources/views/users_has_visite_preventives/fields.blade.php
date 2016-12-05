<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Users Id:') !!}
    {!! Form::select('users_id', $users,null, array('class' => 'form-control') )     !!}
</div>

<!-- Visite Preventive Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visite_preventive_id', 'Visite Preventive Id:') !!}
    {!! Form::select('visite_preventive_id', $visite,null, array('class' => 'form-control') )     !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usersHasVisitePreventives.index') !!}" class="btn btn-default">Cancel</a>
</div>
