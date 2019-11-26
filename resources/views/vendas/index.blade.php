@extends('layouts.master')

@section('content')


@component('components.table')
    @slot('create', route('vendas.create'))
    @slot('titulo', 'Vendas')


    @slot('head')
        <th>Preço</th>
        <th>Quantidade</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($vendas as $venda)
            <tr>
                <td>{{ $venda->precoTotal }}</td>
                <td>{{ $venda->qntdProdVenda }}</td>
                <td class="options">
                    <a href="{{ route('vendas.show', $venda->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('vendas.edit', $venda->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form class="form-delete" action="{{ route('vendas.destroy', $venda->id) }}" method="post">
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