@extends('layouts.master')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Venda')
    @slot('url', route('vendas.update', $venda->id))
    @slot('form')
        @include('vendas.form', ['edit' => true])
    @endslot
@endcomponent

@endsection