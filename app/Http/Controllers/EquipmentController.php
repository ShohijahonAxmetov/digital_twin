<?php

namespace App\Http\Controllers;

use App\Services\EquipmentService;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    private EquipmentService $equipmentService;
    private string $pageTitle = 'Оборудования';

    public function __construct(EquipmentService $equipmentService)
    {
        $this->equipmentService = $equipmentService;
    }

    public function index()
    {
        return view('equipments.index', [
            'equipments' => $this->equipmentService->paginate(),
            'pageTitle' => $this->pageTitle
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipment $equipment)
    {
        //
    }

    public function edit(int $equipmentId)
    {
        return view('equipments.edit', [
            'equipment' => $this->equipmentService->find($equipmentId),
            'pageTitle' => $this->pageTitle
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipment $equipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipment $equipment)
    {
        //
    }
}
