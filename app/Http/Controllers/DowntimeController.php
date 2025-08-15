<?php

namespace App\Http\Controllers;

use App\Services\DowntimeService;
use Illuminate\Http\Request;

class DowntimeController extends Controller
{
    private const PAGE_TITLE = 'Простои';

    public function __construct(
        protected DowntimeService $downtimeService,
    ) {}

    public function index()
    {
        return view('downtimes.index', [
            'downtimes' => $this->downtimeService->paginate(),
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
    public function show(Downtime $downtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Downtime $downtime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Downtime $downtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Downtime $downtime)
    {
        //
    }
}
