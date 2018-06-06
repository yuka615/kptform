@extends('layouts.app')

@section('content')

<!--CSS-->
<style>

body {
    background-color: #2EFEF7;
}
    
</style>


    <h1>KPT新規作成ページ</h1>
        
    <div class="row">
    <!--grid-->
    <div class="col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        
    {!! Form::model($kpt, ['route' => 'kpts.store']) !!}
        
        <div class="form-group">
        {!! Form::label('dates', 'Date:') !!}
        {!! Form::date('dates', \Carbon\Carbon::now()) !!}
        </div>
        
        
        <div class="form-group">
        {!! Form::label('keep', 'Keep:') !!}
        {!! Form::text('keep', null, ['class' => 'form-control']) !!}
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

        <!--button-->
        {!! Form::submit('投稿', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}
    
    </div>
    </div>

    
@endsection