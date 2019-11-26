@extends('layouts.master')

@section('content')

@component('components.create')
    @slot('title', 'Criar Fornecedor')
    @slot('url', route('fornecedors.store'))
    @slot('form')
        @include('fornecedores.form')
    @endslot
@endcomponent

@endsection