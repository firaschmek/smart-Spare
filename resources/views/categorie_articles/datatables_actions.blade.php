{!! Form::open(['route' => ['categorieArticles.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
   
    <a data-toggle="modal" href="#" onclick="fun_modal('{{ route('categorieArticles.show', $id) }}')" data-target="#ProjectModal" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    
    
    <a data-toggle="modal" href="#" onclick="fun_modal('{{ route('categorieArticles.edit', $id) }}')"
         class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>

    <a data-toggle="modal" href="#" onclick="fun_modal('{{ route('categorieArticles.show', $id) }}')" data-target="#ProjectModal" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
   <!--  <a href="{{ URL::route('allarticle',$id) }}">all articles</a> -->
    <li class="{{ Request::is('articles*') ? 'active' : '' }}">
    <a href="{{ URL::route('allarticle',$id) }}"><i class="fa fa-edit"></i><span>articles</span></a>
</li>
</div>
{!! Form::close() !!}
