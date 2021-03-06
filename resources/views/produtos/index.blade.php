@extends('layouts.master')

@section('content')


@component('components.table')
    @slot('create', route('produtos.create'))
    @slot('titulo', 'Produtos')


    @slot('head')
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->qntdEmEstoque }}</td>
                <td class="options">
                    <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form class="form-delete" action="{{ route('produtos.destroy', $produto->id) }}" method="post">
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