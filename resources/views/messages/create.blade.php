@extends('layouts.app')

@section('content')

<!-- ここにコンテンツ -->
    <h1>メッセージ新規製作ページ</h1>
    
    {!! Form::model($message, ['route' => 'messages.store']) !!}
        
        {!! Form::label('content', 'メッセージ：') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('投稿') !!}
    
    {!! Form::close() !!}

@endsection
