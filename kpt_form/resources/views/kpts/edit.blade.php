@extends('layouts.app')

@section('content')

    <h1>id: {{ $kpt->id }} のKPT編集ページ</h1>

    {!! Form::model($kpt, ['route' => ['kpts.update', $kpt->id], 'method' => 'put']) !!}

        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}

        {!! Form::label('content', 'KPT:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('dates', 'Date:') !!}
        {!! Form::text('dates') !!}
        
        {!! Form::label('keep', 'Keep:') !!}
        {!! Form::text('keep') !!}
        
        {!! Form::label('problem', 'Problem:') !!}
        {!! Form::text('problem') !!}
        
        {!! Form::label('Try', 'Try:') !!}
        {!! Form::text('Try') !!}
        
        {!! Form::label('MVP', 'MVP:') !!}
        {!! Form::text('MVP') !!}
        
        {!! Form::label('reason', 'Reason:') !!}
        {!! Form::text('reason') !!}
        
        {!! Form::label('want', 'Want:') !!}
        {!! Form::text('want') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection