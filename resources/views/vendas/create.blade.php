@extends('layouts.master')

@section('content')

@component('components.create')
    @slot('title', 'Criar Venda')
    @slot('url', route('vendas.store'))
    @slot('form')
        @include('vendas.form')
    @endslot
@endcomponent

@endsection