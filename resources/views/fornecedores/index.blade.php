@extends('layouts.master')

@section('content')


@component('components.table')
    @slot('create', route('fornecedors.create'))
    @slot('titulo', 'Fornecedores')


    @slot('head')
        <th>Nome</th>
        <th>telefone</th>
        <th>E-mail</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($fornecedores as $fornecedor)
            <tr>
                <td>{{ $fornecedor->nome }}</td>
                <td>{{ $fornecedor->telefone }}</td>
                <td>{{ $fornecedor->email }}</td>
                <td class="options">
                    <a href="{{ route('fornecedors.show', $fornecedor->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('fornecedors.edit', $fornecedor->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form class="form-delete" action="{{ route('fornecedors.destroy', $fornecedor->id) }}" method="post">
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