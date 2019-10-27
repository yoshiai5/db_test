
@foreach ($diaries as $diary)
    日記
    <a href="{{ route('diaries.show', $diary) }}">{{ $diary->name }}</a>
    <br>
    @foreach ($diary->tags as $key => $tag)
        {{ $key }}:{{ $tag->name }}
        <br>
    @endforeach
@endforeach
