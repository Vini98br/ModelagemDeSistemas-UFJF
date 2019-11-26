@extends('layouts.master')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Produto')
    @slot('url', route('produtos.update', $produto->id))
    @slot('form')
        @include('produtos.form', ['edit' => true])
    @endslot
@endcomponent

@endsection