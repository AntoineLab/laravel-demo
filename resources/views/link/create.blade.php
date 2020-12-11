@extends('layouts.application')
@include('errors')

<form action="{{ route('store') }}" method="POST">
  @csrf
  <input type='text' value="{{old('name')}}" name="name">
  <input type='text' value="{{old('url')}}" name="url">
  <input type="submit" value="SUBMIT!">
</form>