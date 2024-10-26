@extends('layouts.dash')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tipo ropa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tipo_ropas.create') }}"> Create nuevo tipo ropa</a>
                <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @php
        $i = 0; // Inicializar la variable $i
    @endphp

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tipo</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($tipo_ropas as $tipo_ropa)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $tipo_ropa->tipo }}</td>
                <td>
                    <form action="{{ route('tipo_ropas.destroy', $tipo_ropa->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('tipo_ropas.show', $tipo_ropa->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('tipo_ropas.edit', $tipo_ropa->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $tipo_ropas->links() !!}

@endsection
