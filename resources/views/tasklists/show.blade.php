@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasklists->id }} のタスクリスト詳細ページ</h1>

    <p>タスク：{{ $tasklists->content }} ステータス：{{ $tasklists->status }} </p>
    
     {!! link_to_route('tasklists.edit', 'このタスクリストを編集', ['id' => $tasklists->id]) !!}
     {!! Form::model($tasklists, ['route' => ['tasklists.destroy', $tasklists->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection