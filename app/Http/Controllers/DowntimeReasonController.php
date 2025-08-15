<?php

namespace App\Http\Controllers;

use App\Services\DowntimeReasonService;
use Illuminate\Http\Request;

class DowntimeReasonController extends Controller
{
    private const PAGE_TITLE = 'Причины простоев';

    public function __construct(
        protected DowntimeReasonService $downtimeReasonService,
    ) {}

    public function index(DowntimeReasonService $downtimeReasonService)
    {
        return view('downtime_reasons.index', [
            'downtime_reasons' => $this->downtimeReasonService->paginate(),
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
    public function show(DowntimeReason $downtimeReason)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DowntimeReason $downtimeReason)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DowntimeReason $downtimeReason)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DowntimeReason $downtimeReason)
    {
        //
    }
}
