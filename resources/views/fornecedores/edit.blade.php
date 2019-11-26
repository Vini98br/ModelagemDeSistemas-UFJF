@extends('layouts.master')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Fornecedor')
    @slot('url', route('fornecedors.update', $fornecedor->id))
    @slot('form')
        @include('fornecedores.form', ['edit' => true])
    @endslot
@endcomponent

@endsection