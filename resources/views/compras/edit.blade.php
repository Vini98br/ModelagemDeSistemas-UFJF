@extends('layouts.master')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Compra')
    @slot('url', route('compras.update', $compra->id))
    @slot('form')
        @include('compras.form', ['edit' => true])
    @endslot
@endcomponent

@endsection