@extends('layouts.master')

@section('content')


@component('components.table')
    @slot('create', route('clientes.create'))
    @slot('titulo', 'Clientes')


    @slot('head')
        <th>Nome</th>
        <th>Endereço</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->name }}</td>
                <td>{{ $cliente->endereco }}</td>
                <td class="options">
                    <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form class="form-delete" action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endslot
@endcomponent

@endsection

@push('scripts')
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush