@extends('layouts.app')

@section('content')

    <h1>id = {{ $kpt->id }} の詳細ページ</h1>

    <p>タイトル: {{ $kpt->title }}</p>
    <p>KPT: {{ $kpt->content }}</p>

    {!! link_to_route('kpts.edit', 'このKPTを編集', ['id' => $kpt->id]) !!}

    {!! Form::model($kpt, ['route' => ['kpts.destroy', $kpt->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
@endsection