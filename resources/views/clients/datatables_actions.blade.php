{!! Form::open(['route' => ['clients.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
   
    <a data-toggle="modal" href="#" onclick="fun_modal('{{ route('clients.show', $id) }}')" data-target="#ProjectModal" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    
    
    <a data-toggle="modal" href="#" onclick="fun_modal('{{ route('clients.edit', $id) }}')"
         class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
