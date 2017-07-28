@component('layouts.base')
    <form action="{{ route('products.store') }}" class="form-horizontal" method="post">
        @include('admin.products.form')
    </form>

    <a href="{{ route('products.index') }}" class="btn btn-xs btn-default">Voltar</a>

@endcomponent