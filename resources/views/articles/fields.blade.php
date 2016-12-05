<!-- Designation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('designation', 'Designation:') !!}
    {!! Form::text('designation', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Article Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_article', 'Code Article:') !!}
    {!! Form::text('code_article', null, ['class' => 'form-control']) !!}
</div>

<!-- Categorie Article Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categorie_article_id', 'Categorie Article Id:') !!}
    {!! Form::select('categorie_article_id' ,$categorie,null, ['class' => 'form-control']) !!}
      
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('articles.index') !!}" class="btn btn-default">Cancel</a>
</div>
