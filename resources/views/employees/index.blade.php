@extends('layouts.main')
@section('title', 'Registro de empleados')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <i class="fa-solid fa-square-pen"></i> Registro de empleados
                </div>
                <form action="{{ route('admin.employees.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        {{-- Documento --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="document" id="documentInput"
                                placeholder="Documento">
                            <label for="documentInput">Documento</label>
                        </div>

                        {{-- Nombre --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="first_name" id="firstNameInput"
                                placeholder="Nombre">
                            <label for="firstNameInput">Nombre</label>
                        </div>

                        {{-- Apellido --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="last_name" id="lastNameInput"
                                placeholder="Apellido">
                            <label for="lastNameInput">Apellido</label>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <i class="fa-solid fa-square-pen"></i> Listado de empleados
                </div>
                <div class="card-body">
                    {{-- -- Tabla con registro de los empleados -- --}}
                    <table class="table table-striped m-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Documento</th>
                                <th>Nombre empleado</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- datos de los empleados --}}
                            @foreach ($employees as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item['document'] }}</td>
                                    <td>{{ $item['first_name'] }} {{ $item['last_name'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{-- Mostrar paginación --}}
                    <div class="mt-3">
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
