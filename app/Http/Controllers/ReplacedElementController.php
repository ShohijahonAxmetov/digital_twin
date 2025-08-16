<?php

namespace App\Http\Controllers;

use App\Services\ReplacedElementService;
use Illuminate\Http\Request;

class ReplacedElementController extends Controller
{
    private const PAGE_TITLE = 'Замененные элементы в ремонте';

    public function __construct(
        protected ReplacedElementService $replacedElementService,
    ) {}

    public function index()
    {
        //
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
    public function show(ReplacedElement $replacedElement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReplacedElement $replacedElement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReplacedElement $replacedElement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReplacedElement $replacedElement)
    {
        //
    }
}
