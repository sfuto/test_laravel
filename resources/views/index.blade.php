@extends('layout.common')

@section('title', 'インデックスページ')
@section('keywords', 'キーワード1, キーワード2, キーワード3')
@section('description', 'インデックスページの説明')
@section('pageCss')
    <link rel="stylesheet" href="{{asset('/assets/css/index.css')}}">
@endsection

@include('layout.header')

@section('h2','TOPページ')
@section('content')
    <p>このページはインデックスページでござんす</p>
    @foreach ($article_list as $val)
        <p>{{$val->id}}:{{$val->title}}<br></p>
    @endforeach

@endsection

@include('layout.submenu')

@include('layout.footer')
