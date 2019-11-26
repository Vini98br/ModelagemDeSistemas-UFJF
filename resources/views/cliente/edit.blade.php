@extends('layouts.master')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Usuário')
    @slot('url', route('clientes.update', $cliente->id))
    @slot('form')
        @include('cliente.form', ['edit' => true])
    @endslot
@endcomponent

@endsection