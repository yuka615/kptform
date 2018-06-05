@extends('layouts.app')

@section('content')

    <h1>KPT form</h1>

    @if (count($kpts) > 0)
        <ul>
            @foreach ($kpts as $kpt)
                 <li>{!! link_to_route('kpts.show', $kpt->id, ['id' => $kpt->id]) !!} : {{ $kpt->title }} > {{ $kpt->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('kpts.create', '新規KPTの入力') !!}

@endsection