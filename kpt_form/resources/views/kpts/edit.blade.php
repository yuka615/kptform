@extends('layouts.app')

@section('content')

    <h1>id: {{ $kpt->id }} のKPT編集ページ</h1>

    {!! Form::model($kpt, ['route' => ['kpts.update', $kpt->id], 'method' => 'put']) !!}

        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}

        {!! Form::label('content', 'KPT:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection