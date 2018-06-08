@extends('layouts.app')

@section('content')

        <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasklists->id }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $tasklists->title }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $tasklists->content }}</td>
        </tr>
    </table>
    
     {!! link_to_route('tasklists.edit', 'このタスクを編集', ['id' => $tasklists->id], ['class' => 'btn btn-default']) !!}
     {!! Form::model($tasklists, ['route' => ['tasklists.destroy', $tasklists->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection