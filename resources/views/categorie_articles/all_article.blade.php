{!! Form::open(['route' => ['categorieArticles.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
   
    <a data-toggle="modal" href="#" onclick="fun_modal('{{ route('categorieArticles.allarticle', $id) }}')" data-target="#ProjectModal" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    
    
    
{!! Form::close() !!}
