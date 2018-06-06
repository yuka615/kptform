@extends('layouts.app')

@section('content')

    <h1>KPT新規作成ページ</h1>
    
    <form class="form-horizontal">
        
    {!! Form::model($kpt, ['route' => 'kpts.store']) !!}
        
        <div class="form-group">
        {!! Form::label('dates', 'Date:') !!}
        {!! Form::date('dates', \Carbon\Carbon::now()) !!}
        </div>
        
        
        <div class="form-group">
        {!! Form::label('keep', 'Keep:') !!}
        <div style="white-space:pre-wrap;">
        {!! Form::text('keep', null, ['class' => 'form-control']) !!}
        </div>
        </div>
        
        <div class="form-group">
        {!! Form::label('problem', 'Problem:') !!}
        {!! Form::text('problem', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('Try', 'Try:') !!}
        {!! Form::text('Try', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('MVP', 'MVP:') !!}
        {!! Form::text('MVP', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('reason', 'Reason:') !!}
        {!! Form::text('reason', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('want', 'Want:') !!}
        {!! Form::text('want', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

    </form>
    
@endsection