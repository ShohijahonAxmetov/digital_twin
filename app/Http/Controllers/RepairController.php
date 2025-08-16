<?php

namespace App\Http\Controllers;

use App\Services\RepairService;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    private const PAGE_TITLE = 'Выполненные ремонты';

    public function __construct(
        protected RepairService $repairService,
    ) {}

    public function index()
    {
        return view('repairs.index', [
            'repairs' => $this->repairService->paginate(),
            'pageTitle' => self::PAGE_TITLE
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
    public function show(int $repairId)
    {
        return view('repairs.show', [
            'repair' => $this->repairService->findById($repairId),
            'pageTitle' => self::PAGE_TITLE
        ]);
    }

    public function edit(int $repairId)
    {
        return view('repairs.edit', [
            'repair' => $this->repairService->findById($repairId),
            'pageTitle' => self::PAGE_TITLE
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Repair $repair)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Repair $repair)
    {
        //
    }
}
