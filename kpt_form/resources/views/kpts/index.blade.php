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

    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

            <h1>KPT form</h1>
        
            @if (count($kpts) > 0)
            <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>dates</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kpts as $kpt)
                            <tr>
                                <td>{!! link_to_route('kpts.show', $kpt->id, ['id' => $kpt->id]) !!}</td>
                                <td>{!! link_to_route('kpts.show', $kpt->dates, ['id' => $kpt->id]) !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
            
            @endif
    
            {!! link_to_route('kpts.create', ' 新規KPTの入力', null, ['class' => 'btn btn-primary glyphicon glyphicon-pencil']) !!}
    
        </div>
    </div>

@endsection