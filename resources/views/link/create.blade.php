@extends('layouts.application')
@include('errors')

<form action="{{ route('store') }}" method="POST">
  @csrf
  <input type='text' name="name">
  <input type='text' name="url">
  <input type="submit" value="SUBMIT!">
</form>