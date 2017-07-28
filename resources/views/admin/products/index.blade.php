@extends('layouts.base')

@section('title', 'Products')

@section('content')
    <a href="{{ route('products.create') }}" class="btn btn-default">Novo</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>title</th>
            <th class="text-right">ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as$product)
            <tr>
                <td>{{ $product->name}}</td>
                <td>{{ $product->description }}</td>
                <td class="text-right">
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-default btn-xs">
                        <span class="glyphicon glyphicon-plus"></span>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
@endsection