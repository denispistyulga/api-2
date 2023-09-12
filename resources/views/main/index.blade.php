<?php
//echo Form::open(array('url' => 'foo/bar', 'method' => 'put'))
?>

@extends('/main/layout')

@section('content')


    {{ Form::open(['url' => 'get-info-legal', 'method'=>'post']) }}


    <?
    echo '   <div>';
        echo Form::text('token', '12345');
    echo Form::text('type_data', 'director');
    echo Form::text('id_org', '23');

//        echo Form::file('image');
//        echo Form::select('animal',[
//        'Cats' => ['leopard' => 'Leopard'],
//        'Dogs' => ['spaniel' => 'Spaniel'],
//    ]);
    echo Form::submit('Click Me!');
        echo '</div>';


    ?>
    {{ Form::close() }}


{{--        @if (count($model))--}}
<?
//         foreach ($model as $row):
//             echo '<div>'.$row['id'].' '.$row['name'].'</div>';
//         endforeach;
?>

{{--    @endif--}}

{{--    {{$model->links()}}--}}

@endsection






