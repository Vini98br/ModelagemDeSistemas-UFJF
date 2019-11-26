@extends('layouts.master')

@section('content')


@component('components.table')
    @slot('create', route('compras.create'))
    @slot('titulo', 'Compras')


    @slot('head')
        <th>PreçoTotal</th>
        <th>Quantidade</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($compras as $compra)
            <tr>
                <td>{{ $compra->precoTotal }}</td>
                <td>{{ $compra->qntdProdCompra }}</td>
                <td class="options">
                    <a href="{{ route('compras.show', $compra->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('compras.edit', $compra->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form class="form-delete" action="{{ route('compras.destroy', $compra->id) }}" method="post">
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