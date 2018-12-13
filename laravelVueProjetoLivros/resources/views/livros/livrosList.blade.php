@extends('layout.layoutbase')



@section('content')
        <vue-livros-list livros="{{$livros}}"></vue-livros-list>
@stop