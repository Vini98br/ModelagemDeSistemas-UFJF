@extends('layouts.master')

@section('content')

@component('components.create')
    @slot('title', 'Criar Produto')
    @slot('url', route('produtos.store'))
    @slot('form')
        @include('produtos.form')
    @endslot
@endcomponent

@endsection