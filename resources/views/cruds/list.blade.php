<h1>list(methodがgetではない)</h1>


@foreach ($cruds as $crud)
    {{ $crud->function }}<br>
    {{ $crud->ja_name }}<br>
    {{ $crud->is_not_get }}<br>
@endforeach
