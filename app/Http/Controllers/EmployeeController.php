<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;


class EmployeeController extends Controller
{
    private $baseUrl = 'http://localhost:8000/auth/employees/';

    public function index(Request $request)
    {
        $response = Http::get($this->baseUrl);
        $employeesData = $response->json();

        // Convertir a colección
        $employeesCollection = collect($employeesData);

        // Obtener la página actual desde la URL
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Número de registros por página
        $perPage = 10;

        // Obtener solo los elementos de la página actual
        $currentItems = $employeesCollection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        // Crear el paginador
        $employees = new LengthAwarePaginator(
            $currentItems,
            $employeesCollection->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $response = Http::post($this->baseUrl, $request->only('first_name', 'last_name', 'document'));

        // return $response;
        if ($response->successful()) {
            return redirect()->route('admin.employees.index')->with('success', 'Empleado creado correctamente.');
        }

        return back()->with('error', 'No se pudo crear el empleado.');
    }
}
