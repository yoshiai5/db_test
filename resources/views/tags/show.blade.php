{{-- {{ dd($diary->tags->where('id', $tag->id), $tag, $like_flag) }} --}}

日記名：{{ $diary->name }}<br>
タグ名：{{ $tag->name }}<br>
設定　：【{{ config('const.FLAG')[$like_flag] }}】

<br>
<form action="{{ route('tags.update', [$diary, $tag]) }}" method="POST" accept-charset="utf-8">
    @csrf
    @method('PUT')
    <button type="submit">更新</button>
</form>
