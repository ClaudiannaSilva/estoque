<!-- resources/views/produto.index.blade.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>Produto - show</p>
@endsection
 
@section('content')
    <p>Conteúdo</p>


    <p><strong>id:</strong> {{ $produto->id }} </p>
    <p><strong>nome:</strong> {{ $produto->nome }} </p>
    <p><strong>quantidade:</strong> {{ $produto->quantidade }} </p>
    <p><strong>valor:</strong> R$ {{ $produto->valor }} </p>
    <p><strong>criacao:</strong> {{ $produto->created_at }} </p>

     



@endsection