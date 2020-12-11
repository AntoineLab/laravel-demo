@extends('layouts.application')
{{$link->name}}
<a href="{{$link->URL}}">{{$link->URL}}</a>
@auth
    @include('comments.create', ['postId' => $link->id])
@endauth
@each('comments.showcomment', $comment, 'comment', 'comments.nocomment')