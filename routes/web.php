<?php

Route::get('/detalle/{id}', function ($id) {
    $proyectos = [];

    for ($i = 1; $i <= 50; $i++) {
        $proyectos[] = [
            'id' => $i,
            'nombre' => "Proyecto $i",
            'descripcion' => "Descripción del proyecto número $i",
            'categoria' => "Categoría " . ($i % 5 + 1),
            'responsable' => "Responsable $i",
            'fecha' => "2023-0" . ($i % 9 + 1) . "-01",
            'estado' => $i % 2 == 0 ? 'En desarrollo' : 'Finalizado',
            'imagen' => "https://via.placeholder.com/300x180?text=Proyecto$i",
        ];
    }

    $proyecto = collect($proyectos)->firstWhere('id', $id);

    if (!$proyecto) {
        abort(404);
    }

    return view('detalle', compact('proyecto'));
});
