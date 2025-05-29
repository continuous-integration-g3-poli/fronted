<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class AttendanceController extends Controller
{
    private $baseUrl = 'http://localhost:8000/auth/attendance/';

    public function index(Request $request)
    {
        $response = Http::get($this->baseUrl);
        $attendancesData = $response->json();

        // Convertir a colección
        $attendancesCollection = collect($attendancesData);

        // Obtener la página actual desde la URL
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Número de registros por página
        $perPage = 10;

        // Obtener solo los elementos de la página actual
        $currentItems = $attendancesCollection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        // Crear el paginador
        $attendances = new LengthAwarePaginator(
            $currentItems,
            $attendancesCollection->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('attendances.index', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attendances.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fecha = Carbon::now()->toDateString();
        $hora = Carbon::now()->toTimeString();

        $data = [
            'employee_document' => $request->input('employee_document'),
            'date' => $fecha,
            'time' => $hora,
        ];

        $response = Http::post($this->baseUrl, $data);

        if ($response->successful()) {
            return redirect()->route('admin.attendances.index')->with('success', 'Asistencia registrada correctamente.');
        }

        return back()->with('error', 'No se pudo crear la asistencia.');
    }
}
