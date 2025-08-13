<?php

namespace App\Http\Controllers;

use App\Http\Requests\Element\StoreRequest;
use App\Services\{ElementService, EquipmentService, RefusalNatureService};
use Illuminate\Http\Request;

class ElementController extends Controller
{
    private ElementService $elementService;
    private EquipmentService $equipmentService;
    private RefusalNatureService $refusalNatureService;
    private string $pageTitle = 'Элементы оборудования';

    public function __construct(ElementService $elementService, EquipmentService $equipmentService, RefusalNatureService $refusalNatureService)
    {
        $this->elementService = $elementService;
        $this->equipmentService = $equipmentService;
        $this->refusalNatureService = $refusalNatureService;
    }

    public function index()
    {
        return view('elements.index', [
            'elements' => $this->elementService->paginate(),
            'pageTitle' => $this->pageTitle
        ]);
    }

    public function create()
    {
        return view('elements.create', [
            'elements' => $this->elementService->all(),
            'equipments' => $this->equipmentService->all(),
            'refusalNatures' => $this->refusalNatureService->all(),
            'pageTitle' => $this->pageTitle
        ]);
    }

    public function store(StoreRequest $request)
    {
        $this->elementService->create($request->validated());
        return redirect()->route('admin.elements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Element $element)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Element $element)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Element $element)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Element $element)
    {
        //
    }
}
