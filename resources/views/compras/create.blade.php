@extends('layouts.master')

@section('content')

@component('components.create')
    @slot('title', 'Criar Compra')
    @slot('url', route('compras.store'))
    @slot('form')
        @include('compras.form')
    @endslot
@endcomponent

@endsection