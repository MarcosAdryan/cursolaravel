@extends('layouts.main')

@section('title', 'Produto')

@section('content')

<h1>tela de produtos</h1>
   
@if ($busca != "")
<p>usuario esta buscando por: {{ $busca }} </p>
@endif

@endsection