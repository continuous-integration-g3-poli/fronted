const table = $("#NewReportsTable").DataTable({
    responsive: true,
    order: [
        [0, "desc"],
        // [1, "asc"],
    ],
    language: {
        decimal: "",
        emptyTable: "No hay información",
        info: "Mostrando _START_ a _END_ de _TOTAL_ novedades",
        infoEmpty: "Mostrando 0 to 0 of 0 novedades",
        infoFiltered: "(Filtrado de _MAX_ total novedades)",
        infoPostFix: "",
        thousands: ",",
        lengthMenu: "Mostrar _MENU_ novedades",
        loadingRecords: "Cargando...",
        processing: "Procesando...",
        search: "Buscar:",
        zeroRecords: "Sin resultados encontrados",
        paginate: {
            first: "Primero",
            last: "Ultimo",
            next: "Siguiente",
            previous: "Anterior",
        },
    },
});
