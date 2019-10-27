<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  Diary  $diary
     * @param  Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Diary $diary, Tag $tag)
    {
        // dd($tag, $diary->tags, $diary->tags->where('id', $tag->id)->first()->pivot->like_flag);

        // リレーションから中間テーブルの値を取り出すならforeachで回している際に『->pivot->like_flag』
        // そうで無ければ、リレーション後にweher句で特定した後に取り出す。
        $like_flag = $diary->tags->where('id', $tag->id)->first()->pivot->like_flag;

        return view('tags.show', compact('diary', 'tag', 'like_flag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Diary  $diary
     * @param  Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Diary $diary, Tag $tag)
    {
        // 確実に更新されていることを確認する為に、0,1以外を与える。
        $diary->tags()->updateExistingPivot($tag->id, ['like_flag' => 5]);

        return redirect()->route('diaries.show', [$diary]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
