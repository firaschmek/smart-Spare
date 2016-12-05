<!-- Article Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('article_id', 'Article Id:') !!}
    
     {!! Form::select('article_id', $article,null, array('class' => 'form-control') )     !!}
</div>

<!-- Attribut Article Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attribut_article_id', 'Attribut Article Id:') !!}
    
    {!! Form::select('attribut_article_id', $attribut,null, array('class' => 'form-control') )     !!}
</div>

<!-- Valeur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valeur', 'Valeur:') !!}
    {!! Form::text('valeur', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('articleHasAttributArticles.index') !!}" class="btn btn-default">Cancel</a>
</div>
