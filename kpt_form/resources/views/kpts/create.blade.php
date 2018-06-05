@extends('layouts.app')

@section('content')

    <h1>KPT新規作成ページ</h1>

    {!! Form::model($kpt, ['route' => 'kpts.store']) !!}

        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}

        {!! Form::label('content', 'KPT:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection