@extends('layouts.base')
@section('content')
<h3>{{ $title }} <smal>{{ $description }}</smal></h3>

    <div class="panel panel-default">
        <div class="painel-body">
            {{ $slot }}
        </div>
    </div>
@endsection