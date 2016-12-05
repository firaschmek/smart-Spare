<!-- Article Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('article_id', 'Article Id:') !!}
    
     {!! Form::select('article_id', $article,null, array('class' => 'form-control') )     !!}
</div>

<!-- Entropot Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entropot_id', 'Entropot Id:') !!}  
    {!! Form::select('entropot_id', $entropot,null, array('class' => 'form-control') )     !!}
</div>

<!-- Quantite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantite', 'Quantite:') !!}
    {!! Form::text('quantite', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('articleHasEntropots.index') !!}" class="btn btn-default">Cancel</a>
</div>
