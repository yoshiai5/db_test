<h1>index</h1>

@foreach ($cruds as $crud)
    <a href="{{ route('cruds.show', $crud) }}">{{ $crud->function }}</a><br>
@endforeach

    <a href="{{ route('cruds.list') }}">methodがgetではないリスト</a><br>

