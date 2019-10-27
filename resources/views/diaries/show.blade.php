{{ $diary->created_at->format('Y/m/d') }}<br>
{{ $diary->name }}<br>
{{ $diary->body }}<br>

@foreach ($diary->tags as $key => $tag)
    <a href="{{ route('tags.show', [$diary, $tag]) }}">{{ $key }}:{{ $tag->name }} / {{ config('const.FLAG')[$tag->pivot->like_flag] }}</a>
    <br>
@endforeach
