@extends('layouts.master')

@section('content')

@component('components.create')
    @slot('title', 'Criar Cliente')
    @slot('url', route('clientes.store'))
    @slot('form')
        @include('cliente.form')
    @endslot
@endcomponent

@endsection