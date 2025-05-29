@extends('layouts.main')
@section('title', 'Registro de Asistencia')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-10 col-lg-10 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <i class="fa-solid fa-square-pen"></i> Registro de asistencia
                </div>
                <div class="card-body">
                    {{-- Formulario de registro --}}
                    <form action="{{ route('admin.attendances.store') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="employee_document" class="form-control"
                                placeholder="Documento del empleado">
                            <label>Documento del empleado</label>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary">Registrar asistencia</button>
                        </div>
                    </form>
                </div>

                {{-- Tabla de asistencias --}}
                <div class="card mt-4">
                    <div class="card-header">
                        <i class="fa-solid fa-table"></i> Asistencias registradas
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped m-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Documento</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- lista de asistencias --}}
                                @foreach ($attendances as $index => $item)
                                    <tr>
                                        <td>{{ ($attendances->currentPage() - 1) * $attendances->perPage() + $index + 1 }}
                                        </td>
                                        <td>{{ $item['employee']['document'] }}</td>
                                        <td>{{ $item['employee']['first_name'] }} {{ $item['employee']['last_name'] }}</td>
                                        <td>{{ $item['date'] }}</td>
                                        <td>{{ $item['time'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $attendances->links() }}
                    </div>
                </div>
            </div>
        </div>
    @endsection
