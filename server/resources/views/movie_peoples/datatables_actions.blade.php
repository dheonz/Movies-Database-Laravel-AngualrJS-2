{!! Form::open(['route' => ['moviePeoples.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('moviePeoples.show', $id) }}" class='btn btn-primary'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{{ route('moviePeoples.edit', $id) }}" class='btn btn-info'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
