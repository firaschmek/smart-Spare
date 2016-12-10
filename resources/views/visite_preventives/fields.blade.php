<!-- Site Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('site_id', 'Site Id:') !!}
   
 {!! Form::select('site_id', $site , null, array('class' => 'form-control') )     !!} 
</div>

<!-- Date Visite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_visite', 'Date Visite:') !!}
    {!! Form::date('date_visite', null, array('id' => 'datepicker','class' => 'form-control')) !!} 
 


</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('visitePreventives.index') !!}" class="btn btn-default">Cancel</a>
</div>
