@extends('layouts.dash')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Puestos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('puestos.create') }}"> Crear nueva puesto</a>
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
            <th>Puesto</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($puestos as $puesto)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $puesto->puesto }}</td>
                <td>
                    <form action="{{ route('puestos.destroy', $puesto->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('puestos.show', $puesto->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('puestos.edit', $puesto->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $puestos->links() !!}

@endsection
