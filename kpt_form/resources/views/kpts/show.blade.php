@extends('layouts.app')

@section('content')
    
            <div class="alert alert-info" role="alert">
                    今日は、<b>
                        <?php 
                            $timestamp = time() ;
                            echo date( "Y/m/d" , $timestamp ) ;
                        ?>
                    </b>です。
            	        <?php
            	            function rand_message() {
                            	$message = array("一日頑張りましょう！", "適度に休憩しましょうね。", "一つ一つこなしていきましょう！", "今日も三度の飯より PHP です。", "コーヒーの飲みすぎに注意！");
                            	return $message[array_rand($message)];
                            }
             
                            echo rand_message();
            	        ?>
        	  </div>
    
    <h1>{{ $kpt->dates }} の詳細ページ</h1>
    
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Dates</th>
                            <th>Contents</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td><b>{{ $kpt->dates }}</b></td>
                                <td>
                                    <p><b>Keep:</b><br> {!! nl2br($kpt->keep) !!}</p>
                                    <p><b>Problem:</b><br> {!! nl2br($kpt->problem) !!}</p>
                                    <p><b>Try:</b><br> {!! nl2br($kpt->Try) !!}</p>
                                    <p><b>MVP:</b><br> {!! nl2br($kpt->MVP) !!}</p>
                                    <p><b>Reason:</b><br> {!! nl2br($kpt->reason) !!}</p>
                                    <p><b>Want:</b><br> {!! nl2br($kpt->want) !!}</p>
                           
                                
                                </td>
                            </tr>
                    </tbody>
            </table>
    </div>
<div class='btn-toolbar'>
    
    <!--先にゴミ箱を右に寄せる-->

        {!! Form::model($kpt, ['route' => ['kpts.destroy', $kpt->id], 'method' => 'delete'])!!}
            {{ Form::button('<span class="glyphicon glyphicon-trash"></span>', array('class'=>'btn btn-danger pull-right', 'type'=>'submit')) }}
        {!! Form::close() !!}
    
     
        {!! link_to_route('kpts.edit', ' このKPTを編集', ['id' => $kpt->id], ['class' => 'btn btn-primary glyphicon glyphicon-edit']) !!}
</div>

    
@endsection