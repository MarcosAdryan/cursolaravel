@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1> Home</h1>
@if ($nome != "Marcos")
    <p>O nome dele não é Marcos</p>
@else
    <p>{{ $nome }} tem {{ $idade }} anos e é {{ $profissao }}</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }} - {{ $i }}</p>
    @if($i == 2 & $arr[$i] == 3)
    <p>o i é 2 e o arr 3</p>
    @endif
@endfor

@foreach($nomes as $nome)
    <p>{{ $loop->index }}</p>
    <p>{{ $nome }}</p>
@endforeach
@php
    $name = 'João';
    echo $name;
@endphp

<!-- Comentario -->
{{-- Este é o comentario do blade --}}
